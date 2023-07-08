var baseUrl = 'http://127.0.0.1:8000/disease/'

document.addEventListener("DOMContentLoaded", function (event) {
    var predictionContainer = document.getElementById('prediction');
    var btn = document.getElementById('btnSubmit')
    btn.addEventListener('click', function () {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                prediction = JSON.parse(this.responseText)
                predictionContainer.innerText = prediction.prediction
            }
        };
        request.open('GET', buildUrl(), true)
        request.send();
    })
});

function buildUrl() {
    symptomCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked')
    symptoms = []
    symptomCheckboxes.forEach(symptomCheckbox => {
        symptoms.push(symptomCheckbox.value)
    });
    return baseUrl + symptoms.join(',')
}