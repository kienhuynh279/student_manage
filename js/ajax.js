function getAllData() {
    let fetchData = new XMLHttpRequest();

    fetchData.onreadystatechange = () => {
        if(fetchData.readyState === 4 && fetchData.status === 200) {
            document.getElementById('tbody').innerHTML = fetchData.responseText;
        }
    }

    fetchData.open('GET', "http://localhost/StudentManage/api/test_api/fetch_all");
    fetchData.send();
}

function sendData() {
    let formData = document.querySelectorAll('input').value
    let insertData = new XMLHttpRequest();

    insertData.onreadystatechange = () => {
        if(insertData.readyState === 4 && insertData.status === 200) {
            let response = this.responseText
        }
    }

    console.log(formData);
}

const customEvent = (documentObject) => {
    return {
        on: (event_type, css_selector, callback_function) => {
            documentObject.addEventListener(event_type, function (event) {
                if (event.target.matches(css_selector) === false) return;
                callback_function.call(event.target, event);
            }, false);
        }
    }
}

function getId() {
    customEvent(document).on('click', '.button-edit', function (event) { 
        let student_id = event.target.id;

        console.log(student_id);
        return student_id;
    })
}

function getItemData() {
    const customEvent = (documentObject) => {
        return {
            on: (event_type, css_selector, callback_function) => {
                documentObject.addEventListener(event_type, function (event) {
                    if (event.target.matches(css_selector) === false) return;
                    callback_function.call(event.target, event);
                }, false);
            }
        }
    }

    customEvent(document).on('click', '.button-edit', function (event) {
        let student_id = event.target.id;

        let fetchItemData = new XMLHttpRequest();
        fetchItemData.open("POST", "http://localhost/StudentManage/api/test_api/fetch_single"); 
        function statusFetch () {
            if(fetchItemData.readyState === 4 && fetchItemData.status === 200) {
                let response = this.responseText
            }
        }

        fetchItemData.onreadystatechange = statusFetch()

        let data = {student_id: student_id}
        console.log(data);
        fetchItemData.send(JSON.stringify(data))
    });
}

sendData()
getItemData()

getAllData()
