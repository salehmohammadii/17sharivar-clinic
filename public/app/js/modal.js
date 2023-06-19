let span=document.querySelectorAll(".replay_btn");
let input=document.querySelector(".comment_id");


  span.forEach(btn=>{
      btn.onclick=function(){

        let attr=this.getAttribute("data-id");
        input.value=attr;
        showAlert();
      }
  })
  function closeAlert() {


    $("#alert").animate(
      {
        opacity: "0",
        top: "-100%"
      },
      0
    );
    $("#modal").hide();
  }
  
  function showAlert() {
    $("#alert").animate(
      {
        opacity: 1,
        top: "30px"
      },
      800
    );
    $("#modal").show();
  }
  

  $("#close-alert-btn").click(closeAlert);
  $("#modal").click(closeAlert);

  