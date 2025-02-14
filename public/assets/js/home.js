$(document).ready(function () {
    console.log("aaaaaaaaaaaaaaaaaaaaaaaaa");
    
    let images = [];
    $("#thumbnailGallery img").each(function () {
        images.push($(this).attr("src")); // ดึง src ของรูปทั้งหมด
    });

    let currentIndex = 0;
    const totalImages = images.length;

    function updateMainImage(index) {
        $("#mainImage").attr("src", images[index]);
        $(".thumbnail").removeClass("active");
        $(".thumbnail").eq(index).addClass("active");
    }

    $("#nextBtn").click(function () {
        currentIndex = (currentIndex + 1) % totalImages;
        updateMainImage(currentIndex);
    });

    $("#prevBtn").click(function () {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateMainImage(currentIndex);
    });

    $(".thumbnail").click(function () {
        currentIndex = $(".thumbnail").index(this);
        updateMainImage(currentIndex);
    });
});

function setActive(element) {
    // ลบคลาส active ออกจากปุ่มทั้งหมด
    document.querySelectorAll('.custom-pill-nav .nav-link').forEach(btn => {
      btn.classList.remove('active');
    });
  
    // เพิ่มคลาส active ให้กับปุ่มที่ถูกคลิก
    element.classList.add('active');
  }

  
  