const BASE_URL = 'http://localhost/StudentManage/api/api/fetch_single/3';
const tbody = document.getElementById('tbody');

function loadData () {
    let requestBody = {
        'start': 0,
        'length': 10 
    }

    let studentsList = ''
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200){
            studentsList = JSON.parse(this.responseText)
        }
    }

    xhttp.open("POST", BASE_URL, false)
    xhttp.setRequestHeader("Content-Type", "application/json")
    xhttp.send(JSON.stringify(requestBody))

    return studentsList;
}

console.log(loadData());






