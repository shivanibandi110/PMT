let allTasks = document.querySelectorAll(".task");
let select_user = document.getElementById("select-user");
let add_user_btn = document.getElementById("add_user_btn");
let selectedUser = "Invalid";

document.cookie = "PMS_user=Invalid";
function getSelectedUser() {
  selectedUser = select_user.value;
  document.cookie = "PMS_user=" + selectedUser;
}

allTasks.forEach((task) => {
  task.addEventListener("click", () => {
    document.cookie = "PMS_tid=" + task.id;
    // window.open("./view-task.php", "_self");
    
    window.location.href = './tasks.php';
    window.open('./view-task.php', '_self');
  });
});