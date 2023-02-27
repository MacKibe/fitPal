function calculateBMR() {
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var age = document.getElementById("age").value;
    var gender = document.getElementById("gender").value;
    var activity = document.getElementById("activity").value;
  
    if (weight && height && age && gender && activity) {
      var bmr;
  
      if (gender == "male") {
        bmr = 66 + (6.2 * weight) + (12.7 * height) - (6.76 * age);
      } else {
        bmr = 655 + (4.35 * weight) + (4.7 * height) - (4.7 * age);
      }
  
      var maintenance;
  
      if (activity == "sedentary") {
        maintenance = bmr * 1.2;
      } else if (activity == "lightly-active") {
        maintenance = bmr * 1.375;
      } else if (activity == "moderately-active") {
        maintenance = bmr * 1.55;
      } else if (activity == "very-active") {
        maintenance = bmr * 1.725;
      } else {
        maintenance = bmr * 1.9;
      }
  
      var lose1lb = maintenance - 500;
      var lose2lbs = maintenance - 1000;
  
      document.getElementById("bmr").textContent = Math.round(bmr);
      document.getElementById("maintenance").textContent = Math.round(maintenance);
      document.getElementById("lose-1-lb").textContent = Math.round(lose1lb);
      document.getElementById("lose-2-lbs").textContent = Math.round(lose2lbs);
  
      document.getElementById("results").style.display = "block";
    }
  }
  