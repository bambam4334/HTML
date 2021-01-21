function validation(){
    var fid = document.forms["dataForm"]["id"].value;
    if(fid.length != 13){
        alert("กรุณาใส่ 'หมายเลขบัตรประชาชน' 13 หลักของคุณให้ครบ");
        return 0;
    }var ftitle = document.forms["dataForm"]["title"].value;
    if(ftitle == ''){
        alert("กรุณาเลือก 'คำนำหน้า' ชื่อของคุณ");
        return 0;
    }var fname = document.forms["dataForm"]["first"].value;
    if(!(2 <= fname.length && fname.length <= 20)){
        alert("กรุณาใส่ 'ชื่อ' ของคุณให้ครบ");
        return 0;
    }var flast = document.forms["dataForm"]["last"].value;
    if(!(2 <= flast.length && flast.length <= 30)){
        alert("กรุณาใส่ 'นามสกุล' ของคุณให้ครบ");
        return 0;
    }var faddress = document.forms["dataForm"]["address"].value.split("\n");
    if(faddress.length < 2){
        alert("กรุณาใส่ 'ที่อยู่' ของคุณให้ถูกต้อง");
        return 0;
    }var i;
    for(i=0; i<faddress.length; i++){
        if(faddress[i].length.length < 5){
            alert("กรุณาใส่ 'ที่อยู่' ของคุณให้ถูกต้อง");
            return 0;
        }
    }var fcity01 = document.forms["dataForm"]["city01"].value;
    if(fcity01.length < 2){
        alert("กรุณาใส่ 'ตำบล / แขวง' ของคุณให้ถูกต้อง");
        return 0;
    }var fcity02 = document.forms["dataForm"]["city02"].value;
    if(fcity02.length < 2){
        alert("กรุณาใส่ 'อำเภอ / เขต' ของคุณให้ถูกต้อง");
        return 0;
    }var fprovince = document.forms["dataForm"]["province"].value;
    if(fprovince == ''){
        alert("กรุณาเลือก 'จังหวัด' ของคุณ");
        return 0;
    }var fzipCode = document.forms["dataForm"]["zipCode"].value;
    if(fzipCode.length < 5){
        alert("กรุณาใส่ 'รหัสไปรษณีย์' ของคุณ");
        return 0;
    }var fnumber = document.forms["dataForm"]["number"].value;
    if(fnumber.length < 9 || fnumber.length > 10){
        alert("กรุณาใส่ 'เบอร์โทรศัพท์' ของคุณ");
        return 0;
    }
}