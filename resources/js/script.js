let answer = document.querySelectorAll(".main_container");
answer.forEach((event) => { 
    event.addEventListener("click", () => { 
      if (event.classList.contains("active")) { 
        event.classList.remove("active"); 
      } else { 
        event.classList.add("active"); 
      } 
    }); 
  });
  