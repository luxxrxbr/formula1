$( ".add" ).click(function openFormCreate() {
  $(".form-popup-create").toggle();
});

$( ".delete" ).click(function openFormDelete() {

  var id = $(this).data("rowid");
  var form = $(".form-popup-delete form")[0];

  $(form).attr("action", "delete_get.php?id="+id);

  $(".form-popup-delete").toggle();
});

$( ".update" ).click(function openFormUpdate() {
  
  var id = $(this).data("rowid");
  var form = $(".form-popup-update form")[0];

  $(form).attr("action", "update_post.php?id="+id);

  $(".form-popup-update").toggle();
});


function openFormCreate() {
  document.getElementById("myFormCreate").style.display = "block";
}

function closeFormCreate() {
  document.getElementById("myFormCreate").style.display = "none";
}

function openFormDelete() {
  document.getElementById("myFormDelete").style.display = "block";
}

function closeFormDelete() {
  document.getElementById("myFormDelete").style.display = "none";
}

function openFormUpdate() {
  document.getElementById("myFormUpdate").style.display = "block";
}

function closeFormUpdate() {
  document.getElementById("myFormUpdate").style.display = "none";
}
