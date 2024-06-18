function setCookieConsent() {
    let cookiePopup = document.querySelector('.cookie-popup');
    let acceptCookies = document.querySelector('#accept-cookies');
    let denyCookies = document.querySelector('#deny-cookies');
  
    acceptCookies.addEventListener('click', () => {
      cookiePopup.style.display = 'none';
      document.cookie = 'cookieConsent=true; expires=30d; path=/';
    });
  
    denyCookies.addEventListener('click', () => {
      cookiePopup.style.display = 'none';
      document.cookie = 'cookieConsent=false; expires=30d; path=/';
      window.location.href = 'denied.html';
    });
  
    let cookieConsent = document.cookie.includes('cookieConsent=true');
    if (cookieConsent) {
      cookiePopup.style.display = 'none';
    } else {
      cookiePopup.style.display = 'block';
    }
  }
  
  setCookieConsent();