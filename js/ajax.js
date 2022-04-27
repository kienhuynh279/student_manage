

var fetchData = new XMLHttpRequest();

console.log(fetchData);

fetchData.onreadystatechange = () => {
    if(fetchData.readyState === 4 && fetchData.status === 200) {
        document.getElementById('tbody').innerHTML = fetchData.responseText;
    }
}

fetchData.open('GET', "http://localhost/StudentManage/api/test_api/fetch_all");
fetchData.send();
 
