const url = 'http://localhost/StudentManage/api/api'
axios.get(url).then(function(res) {
    let items = res.data
    render(items)
})
