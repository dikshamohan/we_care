import numpy as np
from scipy.stats import mode
import pickle
from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI(title="Desease Prediction")
app.add_middleware(
    CORSMiddleware,
    allow_origins=['*']
)

svm_model = None
nb_model = None
rf_model = None
symptom_index = None

@app.on_event("startup")
def load_models():
  global svm_model
  global nb_model
  global rf_model
  global symptom_index

  svm_model = pickle.load(open("svm.pkl", "rb"))
  nb_model = pickle.load(open("nb.pkl", "rb"))
  rf_model = pickle.load(open("rf.pkl", "rb"))
  symptom_index = pickle.load(open("symptom_index.pkl", "rb"))

@app.get("/")
async def read_root():
  return {"prediction": "welcome to we care"}

@app.get("/disease/{symptoms}")
async def get_prediction(symptoms: str):
  try:
    symptoms = symptoms.lower().replace(' ', '_').split(',')
    input_data = [0] * len(symptom_index)

    for symptom in symptoms:
      index = symptom_index[symptom]
      input_data[index] = 1

    input_data = np.array(input_data).reshape(1,-1)

    rf_prediction = [rf_model.predict(input_data)[0]]
    nb_prediction = [nb_model.predict(input_data)[0]]
    svm_prediction = [svm_model.predict(input_data)[0]]

    prediction = mode([rf_prediction, nb_prediction, svm_prediction], keepdims=True)[0][0][0]

    return {"prediction": prediction}
  except:
    return {"prediction": "server error"}