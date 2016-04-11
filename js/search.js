$(function() {
  $("#searchForm input").jqBootstrapValidation({
      preventSubmit: true,
      submitError: function($form, event, errors) {
          // additional error messages or events
      },
      submitSuccess: function($form, event) {
          // Prevent spam click and default submit behaviour
          $("#btnSubmit").attr("disabled", true);
          event.preventDefault();

          // get values from FORM
          var movie = $("input#moviesearch").val();
          var actor = $("input#actorsearch").val();

          console.log("js received " + movie + " and " + actor);

          $.ajax({
              url: "././core/searchall.php",
              type: "POST",
              data: {
                  movieName: movie,
                  actorName: actor,
              },

              cache: false,
              success: function(data) {
                console.log("ajax request was a success");
                console.log("Beginning of data\n" + data + "\nendof");
                // console.log("Beginning of data\n" + data[0] + "\nendof");

                var json = JSON.parse(data);

                // console.log(json[0]);

                var tbl=$("<table/>").attr("id","mytable").attr("style","width:60%").attr("align","center");
                $("#results").append(tbl);
                $("#results").show();

                for(var i=0; i<json.length; i++)
                {
                    var tr="<tr>";
                    var td1="<td>"+json[i]["movieid"]+"</td>";
                    var td2="<td>"+json[i]["name"]+"</td></tr>";
                   $("#mytable").append(tr+td1+td2);
                }

              },
              error: function(data) {
                console.log("ajax request had a failure" + data);
                  // Fail message
                  // $('#success').html("<div class='alert alert-danger'>");
                  // $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                  //     .append("</button>");
                  // $('#success > .alert-danger').append("<strong>Sorry " + username + ", it seems that my mail server is not responding. Hope you have more luck next time xD!");
                  // $('#success > .alert-danger').append('</div>');
                  // //clear all fields
                  // $('#contactForm').trigger("reset");
              },
          })
      },
      filter: function() {
          return $(this).is(":visible");
      },
  });
});

// When clicking on Full hide fail/success boxes
$('#name').focus(function() {
    $('#success').html('');
});
