function showExperienceYears(element) {
        var experienceYears = document.getElementById("experience-years");
        if (element.value == "experienced") {
          experienceYears.style.display = "table-row";
        } else {
          experienceYears.style.display = "none";
        }
      }