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
        fetchItemData.onreadystatechange = () => {
            if(fetchItemData.readyState === 4 && fetchItemData.status === 200) {
                let response = this.responseText
            }
        }

        let data = {student_id: student_id}

        fetchItemData.send(JSON.stringify(data))
    });

    
}

getAllData();