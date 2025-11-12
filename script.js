document.addEventListener('DOMContentLoaded', function () {

  const wrapper = document.getElementById('wordWrapper');
  const wordList = document.getElementById('wordList');
  
  if (wrapper && wordList) {
    const wordCount = wordList.children.length - 1;
    let currentIndex = 0;
    let isAnimating = false;
    let totalClickCount = 0;
    const promptText = document.getElementById('clickPromptText');

    wrapper.addEventListener('click', function () {
      if (isAnimating) return;
      isAnimating = true;
      currentIndex++;
      totalClickCount++;

      if (totalClickCount === 3) {
        promptText.textContent = "Oh...";
      } else if (totalClickCount === 5) {
        promptText.textContent = ".....";
      }

      const wordHeight = wrapper.clientHeight;
      const translateValue = -currentIndex * wordHeight;
      wordList.style.transform = `translateY(${translateValue}px)`;
    });

    wordList.addEventListener('transitionend', function () {
      if (currentIndex === wordCount) {
        wordList.style.transition = 'none';
        wordList.style.transform = 'translateY(0)';
        currentIndex = 0;
        setTimeout(function () {
          wordList.style.transition = 'transform 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55)';
        }, 0);
      }
      isAnimating = false;
    });
  }

  const wadahBesar = document.querySelector('.wadah-besar');
  const movingSide = document.querySelector('.moving-side');
  const sections = document.querySelectorAll('.page');
  
  let activeSection = '';

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && entry.intersectionRatio >= 0.5) {
        activeSection = entry.target.id;
      }
    });
  }, {
    root: wadahBesar,
    threshold: 0.5
  });

  sections.forEach(section => observer.observe(section));

  wadahBesar.addEventListener('wheel', (event) => {
    
    if (activeSection !== 'porto') {
      return; 
    }

    const deltaY = event.deltaY;
    const scrollHeight = movingSide.scrollHeight;
    const clientHeight = movingSide.clientHeight;
    const scrollTop = movingSide.scrollTop;

    const isAtTop = scrollTop === 0;
    const isAtBottom = (scrollTop + clientHeight) >= (scrollHeight - 2);

    if (deltaY > 0) {
      
      if (!isAtBottom) {
        event.preventDefault(); 
        movingSide.scrollTop += deltaY;
      } else {
      }
      
    } else if (deltaY < 0) {
      
      if (!isAtTop) {
        event.preventDefault(); 
        movingSide.scrollTop += deltaY;
      } else {
      }
    }
  }, { passive: false });

});