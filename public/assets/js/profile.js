// Notification toggle
const btn = document.getElementById("notifyToggle");
const menu = document.getElementById("notifyMenu");

if (btn && menu) {
  btn.addEventListener("click", () => {
    menu.style.display = menu.style.display === "block" ? "none" : "block";
  });

  document.addEventListener("click", (e) => {
    if (!btn.contains(e.target) && !menu.contains(e.target)) {
      menu.style.display = "none";
    }
  });
}

// Confirmation box
function showConfirm() {
  const box = document.getElementById("confirmBox");
  if (box) box.style.display = "flex";
}

function hideConfirm() {
  const box = document.getElementById("confirmBox");
  if (box) box.style.display = "none";
}

function deleteAccount() {
  alert("Account deleted!");
  hideConfirm();
}
