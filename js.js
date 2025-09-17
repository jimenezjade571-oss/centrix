// ================= Elements =================
const boxes = document.querySelectorAll(".box, .offered-bsit, .offered-mit");
const profileBox = document.querySelector(".profile");

const overlay = document.getElementById("overlay"); // main overlay for content-section
const overlayCloseBtn = overlay.querySelector(".close-btn");

const profiling = document.getElementById("profiling"); // profile overlay
const profileCloseBtn = profiling.querySelector(".close-btn");

// All content sections (inside main overlay)
const sections = document.querySelectorAll(
  ".content-section, .program-section"
);

// ================= Functions =================
function hideAllSections() {
  sections.forEach((section) => {
    section.classList.remove("active");
    section.style.display = "none";
  });
}

function showOverlay(targetId) {
  hideAllSections();
  const target = document.getElementById(targetId);
  if (target) {
    target.classList.add("active");
    target.style.display = "block";
    overlay.style.display = "flex";
  }
}

function showProfile(data) {
  document.getElementById("profileName").textContent = data.name;
  document.getElementById("profileSNumber").textContent = data.snumber;
  document.getElementById("profileSection").textContent = data.section;
  profiling.style.display = "flex";
}

// ================= Event Listeners =================

// Click on boxes/programs to open main overlay
boxes.forEach((box) => {
  box.addEventListener("click", () => {
    const targetId = box.getAttribute("data-target");
    if (targetId) {
      // hide profile overlay if open
      profiling.style.display = "none";
      showOverlay(targetId);
    }
  });
});

// Click on profile to open profile overlay
if (profileBox) {
  profileBox.addEventListener("click", () => {
    // hide main overlay
    overlay.style.display = "none";
    hideAllSections();

    // show profile overlay
    showProfile(studentData);
  });
}

// ================= Close Handlers =================

// Close main overlay
overlayCloseBtn.addEventListener("click", () => {
  overlay.style.display = "none";
  hideAllSections();
});

// Close main overlay by clicking outside
overlay.addEventListener("click", (e) => {
  if (e.target === overlay) {
    overlay.style.display = "none";
    hideAllSections();
  }
});

// Close profile overlay
profileCloseBtn.addEventListener("click", () => {
  profiling.style.display = "none";
});

// Close profile overlay by clicking outside
profiling.addEventListener("click", (e) => {
  if (e.target === profiling) profiling.style.display = "none";
});

// ================= Video Hover =================

// .box videos
document.querySelectorAll(".box video").forEach((video) => {
  video.pause();
  video.parentElement.addEventListener("mouseenter", () => video.play());
  video.parentElement.addEventListener("mouseleave", () => {
    video.pause();
    video.currentTime = 0;
  });
});

// .profile video
if (profileBox) {
  const profileVideo = profileBox.querySelector("video");
  if (profileVideo) {
    profileVideo.pause();

    function playProfileVideo() {
      profileVideo.play();
    }
    function stopProfileVideo() {
      profileVideo.pause();
      profileVideo.currentTime = 0;
    }

    profileVideo.addEventListener("mouseenter", playProfileVideo);
    profileVideo.addEventListener("mouseleave", stopProfileVideo);
    profileBox.addEventListener("mouseenter", playProfileVideo);
    profileBox.addEventListener("mouseleave", stopProfileVideo);
  }
}

// search sched

const searchInput = document.querySelector(".sched-search input");
const images = document.querySelectorAll(".sched-pic img");

searchInput.addEventListener("input", () => {
  const query = searchInput.value.toLowerCase();

  images.forEach((img) => {
    const altText = img.alt.toLowerCase();
    if (altText.includes(query)) {
      img.style.display = "inline-block"; // show matching images
    } else {
      img.style.display = "none"; // hide non-matching
    }
  });
});

//image overlay
// Select all schedule images
const schedImages = document.querySelectorAll(".sched-pic img");
const imgOverlay = document.getElementById("imgOverlay");
const overlayImg = document.getElementById("overlayImg");
const closeOverlay = document.querySelector(".close-overlay");

// When an image is clicked
schedImages.forEach((img) => {
  img.addEventListener("click", () => {
    overlayImg.src = img.src; // set clicked image
    overlayImg.alt = img.alt;
    imgOverlay.style.display = "flex";
  });
});

// Close overlay when clicking the X
closeOverlay.addEventListener("click", () => {
  imgOverlay.style.display = "none";
});

// Close overlay when clicking outside the image
imgOverlay.addEventListener("click", (e) => {
  if (e.target === imgOverlay) {
    imgOverlay.style.display = "none";
  }
});

//night mode
const nightModeBtn = document.getElementById("nightModeBtn");

nightModeBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");

  // Change button text
  if (document.body.classList.contains("dark-mode")) {
    nightModeBtn.textContent = "Light Mode";
  } else {
    nightModeBtn.textContent = "Night Mode";
  }

  // Optional: save preference
  localStorage.setItem(
    "theme",
    document.body.classList.contains("dark-mode") ? "dark" : "light"
  );
});

// Load preference on page load
if (localStorage.getItem("theme") === "dark") {
  document.body.classList.add("dark-mode");
  nightModeBtn.textContent = "Light Mode";
}

//profile pic
const profileInput = document.getElementById("profile-pic");
const profilePreview = document.getElementById("profile-preview");
const profileRemove = document.getElementById("profile-remove");

const defaultPic = "images/profile.png"; // your default profile picture path

// Load saved picture from localStorage (if any)
const savedPic = localStorage.getItem("profilePicture");
if (savedPic) {
  profilePreview.src = savedPic;
}

// When user selects a new picture
profileInput.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      profilePreview.src = e.target.result;

      // Save picture to localStorage
      localStorage.setItem("profilePicture", e.target.result);
    };
    reader.readAsDataURL(file);
  }
});

// When user clicks "Remove Photo"
profileRemove.addEventListener("click", function () {
  profilePreview.src = defaultPic;

  // Remove from localStorage
  localStorage.removeItem("profilePicture");

  // Reset file input (so the same file can be uploaded again if needed)
  profileInput.value = "";
});
