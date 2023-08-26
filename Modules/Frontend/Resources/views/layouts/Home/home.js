carouselMultiple('.splide-news', {
  perPage: 4,
  arrows: false,
  breakpoints: {
  
    1200: {
      perPage: 3
    },

    992: {
      perPage: 2
    },
    480 :{
      perPage: 1
    },
  }
});

// Text run

let hasCounted = false; // ตัวแปรสำหรับตรวจสอบว่าเคยทำการนับแล้วหรือไม่

// สร้างฟังก์ชันสำหรับการนับเลขขึ้น
function countStart() {
  if (hasCounted) {
    return; // ถ้าเคยทำการนับแล้ว ให้ไม่ทำฟังก์ชันนี้อีก
  }

  hasCounted = true; // กำหนดให้เคยทำการนับแล้ว

  const counters = document.querySelectorAll(".textRun");
  const options = {
    useEasing: true,
    useGrouping: true,
    separator: ",",
    decimal: "."
  };

  counters.forEach((item) => {
    const value = parseFloat(item.dataset.value);
    const duration = 2; // ระยะเวลาในการทำการนับ
    const framesPerSecond = 60;
    const totalFrames = duration * framesPerSecond;
    const increment = value / totalFrames;
  
    let current = 0;
    const isPercentage = item.textContent.includes("%"); // เช็คว่าเป็นข้อความที่มี % หรือไม่
  
    const interval = setInterval(() => {
      current += increment;
  
      if (current >= value) {
        current = value; // ให้ค่า current เป็นค่า value เมื่อเลขขึ้นถึงเป้าหมาย
        clearInterval(interval);
      }
      
      if (isPercentage) {
        item.textContent = current.toFixed(0) + "%"; // แสดงเลขในรูปแบบหลักพันพร้อมเครื่องหมาย %
      } else {
        item.textContent = parseFloat(current.toFixed(0)).toLocaleString(); // แสดงเลขในรูปแบบหลักพัน
      }
    }, 1000 / framesPerSecond);
  });
}

window.addEventListener("scroll", () => {
  const levelElement = document.querySelector(".level");
  const offset = window.innerHeight; 

  const levelElementPosition = levelElement.getBoundingClientRect();
  if (levelElementPosition.top - offset <= 0) {
    countStart();
  }
});