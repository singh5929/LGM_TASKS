function append(val){
    document.getElementById("result").value+=val;
   }

 function clearResult(){
    document.getElementById("result").value="";
 }

 function calculate() {
    const result = eval(document.getElementById("result").value);
    document.getElementById("result").value = result;
  }