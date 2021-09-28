// function addNew(){
//    var elmnt = document.getElementById("frm");
//    var cln = elmnt.cloneNode(true);
//    let weAddBtnOb = document.getElementById('weAddButton')
//    elmnt.insertBefore(cln,weAddBtnOb)
// }

// function hobbi(){
//   let newNode = document.createElement("textarea");
//   newNode.classList.add("form-control");
//   newNode.classList.add('hobyy');
//   newNode.setAttribute("placeholder","Enter your hobby");
//   newNode.classList.add("mt-2");
//   let hobOb = document.getElementById("hob");
//   let newHob = document.getElementById("newhobby");
//   hobOb.insertBefore(newNode,newHob)
// }
// function addNew1(){
//   let newNode=document.createElement("textarea");
//   newNode.classList.add("form-control");
//   newNode.classList.add("hobby");
//   newNode.setAttribute("placeholder","Enter your hobby");
//   newNode.classList.add("mt-2")
//   let weOb=document.getElementById("we");
//   let newhobbyOb=document.getElementById("newhobby");
//   weOb.insertBefore(newNode,newhobbyOb);
//   console.log("hobbyyyy addedd");
// }
document.getElementById('cv-body').style.display = 'block';
  document.getElementById('heddd').style.display = 'block';
  document.getElementById('cv-template').style.display = 'none';

function addNew2(){
  let newNode=document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("langy");
  newNode.setAttribute("placeholder","Enter your language");
  newNode.classList.add("mt-2")
  let langOb=document.getElementById("lang");
  let addlangOb=document.getElementById("addlang");
  langOb.insertBefore(newNode,addlangOb);
}
function addNew3(){
  let newNode=document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("certi");
  newNode.setAttribute("placeholder","Enter your text/link");
  newNode.classList.add("mt-2")
  let certOb=document.getElementById("cert");
  let newcertOb=document.getElementById("newcert");
  certOb.insertBefore(newNode,newcertOb);
}
function addNew4(){
  let newNode=document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("awardi");
  newNode.setAttribute("placeholder","Enter your text");
  newNode.classList.add("mt-2")
  let awardOb=document.getElementById("award");
  let newawardOb=document.getElementById("newaward");
  awardOb.insertBefore(newNode,newawardOb);
}
function addNew5(){
  let newNode=document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("projecti");
  newNode.setAttribute("placeholder","Enter your project description");
  newNode.classList.add("mt-2")
  let proOb=document.getElementById("pro");
  let newproOb=document.getElementById("newpro");
  proOb.insertBefore(newNode,newproOb);
}
function addNew6(){
  let newNode=document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("skilli");
  newNode.setAttribute("placeholder","skill");
  newNode.classList.add("mt-2")
  let skillOb=document.getElementById("skill");
  let newskillOb=document.getElementById("newskill");
  skillOb.insertBefore(newNode,newskillOb);
}

function adddNew7(){
  let newNode=document.createElement("textarea");
  newNode.classList.add("form-control");
  newNode.classList.add("wei");
  newNode.setAttribute("placeholder","enter your experience");
  newNode.classList.add("mt-2")
  let weOb=document.getElementById("we");
  let newweOb=document.getElementById("newwe");
  weOb.insertBefore(newNode,newweOb);
}
//Generating CV 
function generateCV(){
  let nameField = document.getElementById('nameField').value;
  let nameT1 = document.getElementById('nameT')
  let nameT2 = document.getElementById('nameT2')
  let phoneField = document.getElementById('phoneField').value;
  let phoneT = document.getElementById('phoneT');
  let addressField  = document.getElementById('addressField').value;
  let addressT = document.getElementById('addressT')
  let emailField = document.getElementById('emailField').value;
  let emailT = document.getElementById('emailT')
  let linkField = document.getElementById('linkField').value;
  let linkT = document.getElementById('linkT')


  let aboutField = document.getElementById('aboutField').value;
  let aboutT = document.getElementById('aboutT')
  let inputclgname =document.getElementById('inputclgname').value;
  let clgT1=document.getElementById('clgT1')
  let inputCity =document.getElementById('inputCity').value;
  let cityT1=document.getElementById('cityT1')
  let inputstate =document.getElementById('inputstate').value;
  let stateT1=document.getElementById('stateT1')
  let inputdesc =document.getElementById('inputdesc').value;
  let descT1=document.getElementById('descT1')

  let inputpuname =document.getElementById('inputpuname').value;
  let clgT2=document.getElementById('clgT2')
  let inputpuCity =document.getElementById('inputpuCity').value;
  let cityT2=document.getElementById('cityT2')
  let inputpustate =document.getElementById('inputpustate').value;
  let stateT2=document.getElementById('stateT2')
  let inputpudesc =document.getElementById('inputpudesc').value;
  let descT2=document.getElementById('descT2')

  let inputsklname =document.getElementById('inputsklname').value;
  let clgT3=document.getElementById('clgT3')
  let inputsklCity =document.getElementById('inputsklCity').value;
  let cityT3=document.getElementById('cityT3')
  let inputsklstate =document.getElementById('inputsklstate').value;
  let stateT3=document.getElementById('stateT3')
  let inputskldesc =document.getElementById('inputskldesc').value;
  let descT3=document.getElementById('descT3')

  let skills =document.getElementById('skills').value;
  let skilT=document.getElementById('skilT')
  let skillss =document.getElementById('skillss').value;
  let skilT1=document.getElementById('skilT1')

  let languages =document.getElementById('languages').value;
  let langT1=document.getElementById('langT1')

  let hobbies =document.getElementById('hobbies').value;
  let hobbyT1=document.getElementById('hobbyT1')

  let awards =document.getElementById('awards').value;
  let awardT1=document.getElementById('awardT1')

  let wef =document.getElementById('wef').value;
  let workT=document.getElementById('workT')

  let projects =document.getElementById('projects').value;
  let proT=document.getElementById('proT')

  let certificates =document.getElementById('certificates').value;
  let cerT=document.getElementById('cerT')


  nameT1.innerHTML = nameField;
  nameT2.innerHTML = nameField;
  phoneT.innerHTML = phoneField;
  addressT.innerHTML = addressField;
  emailT.innerHTML = emailField;
  linkT.innerHTML = linkField;
  aboutT.innerHTML = aboutField;
  clgT1.innerHTML = inputclgname;
  cityT1.innerHTML = inputCity;
  stateT1.innerHTML = inputstate;
  descT1.innerHTML = inputdesc;
  clgT2.innerHTML = inputpuname;
  cityT2.innerHTML = inputpuCity;
  stateT2.innerHTML = inputpustate;
  descT2.innerHTML = inputpudesc;
  clgT3.innerHTML = inputsklname;
  cityT3.innerHTML = inputsklCity;
  stateT3.innerHTML = inputsklstate;
  descT3.innerHTML = inputskldesc;
  skilT.innerHTML = skills;
  skilT1.innerHTML = skillss;
  langT1.innerHTML = languages;
  hobbyT1.innerHTML = hobbies;
  awardT1.innerHTML = awards;
  workT.innerHTML = wef;
  proT.innerHTML = projects;
  cerT.innerHTML = certificates;


  // console.log("generateCvvvvv");

  // //Skills
  // let sk = document.getElementsByClassName('skilli');
  // let str = ''

  // for(let e of sk){
  //     str = str + `<button> ${e.value} </button>`;
  // }
  // document.getElementById('skillT').innerHTML = str;

  //Work Expp
  // let wes = document.getElementsByClassName('wei');
  // let ttr = ''

  // for (let f of wes){
  //   ttr = ttr + `<li> ${f.value} </li>`
  // }
  // document.getElementById('workT').innerHTML = ttr;

  // //Languages
  // let lang = document.getElementsByClassName('langy');
  // let ll = ''

  // for (let l of lang){
  //   ll = ll + `<li> ${l.value}  </li>`
  // }
  // document.getElementById('langT').innerHTML = ll;
  
  // //hobbies
  // let hob = document.getElementsByClassName('hobby');
  // let hh = ''

  // for (let n of hob){
  //   hh = hh + `<li> ${n.value} </li>`
  // }
  // document.getElementById('hobbyT').innerHTML = hh;
  // console.log(hh, "addddddhobby");

  // //awards
  // let award=document.getElementsByClassName('awardi');
  // let aa=''

  // for(w of award){
  //    aa = aa + `<li> ${w.value} </li>`
  // }
  // document.getElementById('awardT').innerHTML = aa;

   

  document.getElementById('cv-body').style.display = 'none';
  document.getElementById('heddd').style.display = 'none';
  document.getElementById('cv-template').style.display = 'block';


}

function printCV(){
  document.getElementById('printcvbtn').style.display = 'none';
  window.print()
  
}