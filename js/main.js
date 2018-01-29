function createStaffListTable(obj) {
  var tbl = document.createElement('table');
  tbl.classList.add('table');
  var thead = document.createElement('thead');
  var thr = document.createElement('tr');

  var th1 = document.createElement('th');
  // th1.setAttribute('scope','col');
  th1.innerHTML = 'staff_id';
  thr.appendChild(th1);
  var th2 = document.createElement('th');
  th2.innerHTML = 'first_name';
  thr.appendChild(th2);
  var th3 = document.createElement('th');
  th3.innerHTML = 'last_name';
  thr.appendChild(th3);
  var th4 = document.createElement('th');
  th4.innerHTML = 'is_active';
  thr.appendChild(th4);

  thead.appendChild(thr);
  tbl.appendChild(thead);


  var tbdy = document.createElement('tbody');
  for (var i = 0; i < obj.length; i++) {
    var tr = document.createElement('tr');

    var td1 = document.createElement('td');
    td1.innerHTML = obj[i].staff_id;
    tr.appendChild(td1);
    var td2 = document.createElement('td');
    td2.innerHTML = obj[i].first_name;
    tr.appendChild(td2);
    var td3 = document.createElement('td');
    td3.innerHTML = obj[i].last_name;
    tr.appendChild(td3);
    var td4 = document.createElement('td');
    td4.innerHTML = obj[i].is_active;
    tr.appendChild(td4);

    tbdy.appendChild(tr);
  }
  tbl.appendChild(tbdy);
  return tbl.outerHTML;
}

function getStaffList() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var myObj = JSON.parse(this.responseText);
      document.getElementById("ajaxtable").innerHTML = createStaffListTable(myObj.data);
    }
  };
  xmlhttp.open("GET", "actionstafflist.php", true);
  xmlhttp.send();
}

$(document).ready(function() {
  getStaffList();
});
