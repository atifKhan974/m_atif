const usersLink = document.getElementById("usersLink"),
dashboardLink = document.getElementById("dashboardLink"),
dashboardSection = document.getElementById("dashboardSection"),
websiteSection = document.getElementById("websiteSection"),
projectSection = document.getElementById("projectSection"),
usersSection = document.getElementById("usersSection");
servicesSection = document.getElementById("servicesSection");
websiteLink = document.getElementById("websiteLink"),
projectLink = document.getElementById("projectLink"),
servicesLink = document.getElementById("servicesLink");





let addNewBtn = document.querySelector(".addNewBtn");
let addNewProject = document.querySelector(".addNewProject"); 
let viewProjects = document.querySelector(".viewProjects"); 

linksOperations();
function linksOperations(){
usersLink.addEventListener("click" , (e)=>{
    e.preventDefault();
    usersLink.classList.add("text-light")
    usersLink.classList.add("bg-primary")

    usersSection.classList.replace("d-none","d-block");

    dashboardSection.classList.replace("d-block","d-none")
    websiteSection.classList.replace("d-block","d-none")
    projectSection.classList.replace("d-block","d-none")
    servicesSection.classList.replace("d-block","d-none")


    dashboardLink.classList.remove("text-light")
    dashboardLink.classList.remove("bg-primary")
    websiteLink.classList.remove("text-light")
    websiteLink.classList.remove("bg-primary")
    projectLink.classList.remove("text-light")
    projectLink.classList.remove("bg-primary")
    servicesLink.classList.remove("text-light")
    servicesLink.classList.remove("bg-primary")
})

dashboardLink.addEventListener("click" , (e)=>{
    e.preventDefault();
    dashboardLink.classList.add("text-light")
    dashboardLink.classList.add("bg-primary")

    dashboardSection.classList.replace("d-none","d-block") 

    usersSection.classList.replace("d-block","d-none");
    websiteSection.classList.replace("d-block","d-none")
    projectSection.classList.replace("d-block","d-none")
    servicesSection.classList.replace("d-block","d-none")


    usersLink.classList.remove("text-light")
    usersLink.classList.remove("bg-primary")
    websiteLink.classList.remove("text-light")
    websiteLink.classList.remove("bg-primary")
    projectLink.classList.remove("text-light")
    projectLink.classList.remove("bg-primary")
    servicesLink.classList.remove("text-light")
    servicesLink.classList.remove("bg-primary")
})
websiteLink.addEventListener("click" , (e)=>{
    e.preventDefault();
    websiteLink.classList.add("text-light")
    websiteLink.classList.add("bg-primary")

    websiteSection.classList.replace("d-none","d-block");

    usersSection.classList.replace("d-block","d-none");
    dashboardSection.classList.replace("d-block","d-none")
    projectSection.classList.replace("d-block","d-none")
    servicesSection.classList.replace("d-block","d-none")


    usersLink.classList.remove("text-light")
    usersLink.classList.remove("bg-primary")
    dashboardLink.classList.remove("text-light")
    dashboardLink.classList.remove("bg-primary")
    projectLink.classList.remove("text-light")
    projectLink.classList.remove("bg-primary")
    servicesLink.classList.remove("text-light")
    servicesLink.classList.remove("bg-primary")
})

projectLink.addEventListener("click" , (e)=>{
    e.preventDefault();
    projectLink.classList.add("text-light")
    projectLink.classList.add("bg-primary")
    
    projectSection.classList.replace("d-none","d-block");

    usersSection.classList.replace("d-block","d-none");
    dashboardSection.classList.replace("d-block","d-none")
    websiteSection.classList.replace("d-block","d-none")
    servicesSection.classList.replace("d-block","d-none")

    usersLink.classList.remove("text-light")
    usersLink.classList.remove("bg-primary")
    dashboardLink.classList.remove("text-light")
    dashboardLink.classList.remove("bg-primary")
    websiteLink.classList.remove("text-light")
    websiteLink.classList.remove("bg-primary")
    servicesLink.classList.remove("text-light")
    servicesLink.classList.remove("bg-primary")

    viewProjects.classList.replace("d-none","d-block")
    addNewProject.classList.replace("d-block","d-none")
})
servicesLink.addEventListener("click" , (e)=>{
    e.preventDefault();
    servicesLink.classList.add("text-light")
    servicesLink.classList.add("bg-primary")
    
    servicesSection.classList.replace("d-none","d-block");

    usersSection.classList.replace("d-block","d-none");
    dashboardSection.classList.replace("d-block","d-none")
    websiteSection.classList.replace("d-block","d-none")
    projectSection.classList.replace("d-block","d-none")

    usersLink.classList.remove("text-light")
    usersLink.classList.remove("bg-primary")
    dashboardLink.classList.remove("text-light")
    dashboardLink.classList.remove("bg-primary")
    websiteLink.classList.remove("text-light")
    websiteLink.classList.remove("bg-primary")
    projectLink.classList.remove("text-light")
    projectLink.classList.remove("bg-primary")

    addNewService.classList.replace("d-block","d-none");
    viewServices.classList.replace("d-none","d-block");
})
}

const primaryColor = document.getElementById("primaryColor"),
primaryColor_400 = document.getElementById("primaryColor_400"),
primaryColor_600 = document.getElementById("primaryColor_600"),
secondaryColor = document.getElementById("secondaryColor"),
primaryColorInput = document.getElementById("primaryColorInput"),
primaryColor_400_Input = document.getElementById("primaryColor_400_Input"),
primaryColor_600_Input = document.getElementById("primaryColor_600_Input"),
secondaryColorInput = document.getElementById("secondaryColorInput");


primaryColor.addEventListener("input" , setColor);
primaryColor_400.addEventListener("input" , setColor);
primaryColor_600.addEventListener("input" , setColor);
secondaryColor.addEventListener("input" , setColor);

function setColor(){
    primaryColorInput.value = primaryColor.value;
    primaryColor_400_Input.value = primaryColor_400.value;
    primaryColor_600_Input.value = primaryColor_600.value;
    secondaryColorInput.value = secondaryColor.value;
}


addNewBtn.addEventListener("click",()=>{
    addNewProject.classList.replace("d-none","d-block");
    viewProjects.classList.replace("d-block","d-none");
})


let addNewServiceBtn = document.querySelector(".addNewServiceBtn");
let addNewService = document.querySelector(".addNewService")
let viewServices = document.querySelector(".viewServices")

addNewServiceBtn.addEventListener("click",()=>{
    console.log('Add Serv');
    
    addNewService.classList.replace("d-none","d-block");
    viewServices.classList.replace("d-block","d-none");
})