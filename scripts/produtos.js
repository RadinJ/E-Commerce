window.onload = function() {
    pegarprodutos();
};

function pegarprodutos(){

    var objConnection = new ActiveXObject("adodb.connection");
    var strConn = "driver={sql server};server=QITBLRQIPL030;database=Norden;uid=sa;password=12345";
    objConnection.Open(strConn);
    var rs = new ActiveXObject("ADODB.Recordset");
    var strQuery = "SELECT * FROM  Person.Address";
    rs.Open(strQuery, objConnection);
    rs.MoveFirst();
    while (!rs.EOF) {
        document.write(rs.fields(0) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        document.write(rs.fields(1) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        document.write(rs.fields(2) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    ");
        document.write(rs.fields(3) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    ");
        document.write(rs.fields(4) + "<br/>");
        rs.movenext();
    }


}




