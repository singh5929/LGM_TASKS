var c=0;
function enrollStd(){
  const allUserData=[];

    let sectionHeading=null;

    const username=document.getElementById("name").value;
    const useremail =document.getElementById("email").value;
    const userwebsite=document.getElementById("website").value;
    const image=document.getElementById("image").value;

    let usergender;
    let userskills=[];

    let gender_select_male=document.getElementById("male");
    let gender_select_female=document.getElementById("female");

 if(gender_select_male.checked==true)
 usergender="Male";
    else if(gender_select_female.checked==true)
    usergender="Female";
    else
    usergender="";

    let skill_java=document.getElementById("java");
    let skill_html=document.getElementById("html");
    let skill_css=document.getElementById("css");

    if(skill_java.checked==true)
    userskills.push("Java");
   if(skill_html.checked==true)
   userskills.push("HTML");
   if(skill_css.checked==true)
   userskills.push("CSS");
     
  
       sectionHeading=document.createElement('div');
       const description=document.createElement('p');
       description.innerHTML="Description";
       description.className="description";

       const img=document.createElement('p');
       img.innerHTML="Image";
       img.className="image";

       sectionHeading.className="sectionHeading";
       sectionHeading.append(description,img);

    const textInfoContainer=document.createElement('div');
    textInfoContainer.className="textInfoContainer";

    const imageContainer=document.createElement('div');
    imageContainer.className="imageContainer";

    const imageHyperlink=document.createElement('a');
    imageHyperlink.href=image;
    imageHyperlink.target="_blank";

    let name=document.createElement('p');
    name.className="userName";
    name.innerHTML=username;

    let gender=document.createElement("p");
    gender.className="userGender";
    gender.innerHTML=usergender;

   let email=document.createElement("p");
   email.className="userEmail";
   email.innerHTML=useremail;

   let website=document.createElement("a");
   website.className="userWebsite";
   website.innerHTML=userwebsite;
   website.href=userwebsite;
   website.target="_blank";

   let skills=document.createElement("p");
   skills.className="userSkills";
   skills.innerHTML=userskills.join(', ');



   let userImage=document.createElement('img');
   userImage.className="userImage";
   userImage.src=image;

   textInfoContainer.append(name,gender,email,website,skills);
   //imageHyperlink.appendChild(userImage);
   imageContainer.appendChild(userImage);

    const resultEl=document.getElementById("right");
    const wrapper=document.createElement('div');
    wrapper.className="wrapper";

    wrapper.append(textInfoContainer,imageContainer);

    
    if(c==0){

     resultEl.append(sectionHeading,wrapper);
       c=1;
    }   
     else{
      resultEl.append(wrapper);
     }
    
   
    //resultE1.appendChild(wrapper);


   document.getElementById("name").value="";
   document.getElementById("email").value="";
   document.getElementById("website").value="";
   document.getElementById("image").value="";
   document.getElementById("male").checked=false;
   document.getElementById("female").checked=false;
   document.getElementById("java").checked=false;
   document.getElementById("html").checked=false;
   document.getElementById("css").checked=false;
}

  function allClear(){

    document.getElementById("name").value="";
    document.getElementById("email").value="";
    document.getElementById("website").value="";
    document.getElementById("image").value="";
    document.getElementById("male").checked=false;
    document.getElementById("female").checked=false;
    document.getElementById("java").checked=false;
    document.getElementById("html").checked=false;
    document.getElementById("css").checked=false;
  }