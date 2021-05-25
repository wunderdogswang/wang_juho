var currentTime = new Date().getHours();
var theContent;

var morningContent = [
    {
        text: 'When you finally <span> catch that wave</span>',
        video: 'http://localhost/juho/wp-content/uploads/2021/05/morning.mp4',
        image: 'http://localhost/juho/wp-content/uploads/2021/05/morning.jpg'
    }
];

var afternoonContent = [
    {
        text: 'When a hike <span> turns into a leap.</span>',
        video: 'http://localhost/juho/wp-content/uploads/2021/05/afternoon.mp4',
        image: 'http://localhost/juho/wp-content/uploads/2021/05/afternoon.jpg'
    }
];

var eveningContent = [
    {
        text: 'When the day is done <span> — but you’re not.</span>',
        video: 'http://localhost/juho/wp-content/uploads/2021/05/evening.mp4',
        image: 'http://localhost/juho/wp-content/uploads/2021/05/evening.jpg'
    }
];

var nightContent = [
    {
        text: 'When a good night <span> turns amazing.</span>',
        video: 'http://localhost/juho/wp-content/uploads/2021/05/night.mp4',
        image: 'http://localhost/juho/wp-content/uploads/2021/05/night.jpg'
    }
];

/* 
* Checks the current time then determines which content to return
* The content for every timeslot is randomized but the pairing is defined manually 
*/

if (currentTime >= 6 && currentTime < 12) {
    /* 6AM - 12PM */
    theContent = morningContent[Math.floor(Math.random() * morningContent.length)];
} else if (currentTime >= 12 && currentTime < 16) {
    /* 12PM - 4PM */
    theContent = afternoonContent[Math.floor(Math.random() * afternoonContent.length)];
} else if (currentTime >= 16 && currentTime < 20) {
    /* 4PM - 8PM */
    theContent = eveningContent[Math.floor(Math.random() * eveningContent.length)];
} else if (currentTime >= 20 && currentTime < 24) {
    /* 8PM - 6AM */
    theContent = nightContent[Math.floor(Math.random() * nightContent.length)];
} else if (currentTime >= 0 && currentTime < 6) {
    /* 8PM - 6AM */
    theContent = nightContent[Math.floor(Math.random() * nightContent.length)];
}

/* 
* Assigns the content depending on the time and randon selection for every timeslot 
*/

jQuery(document).ready(function ($) {
    $('.home__hero-content-title').append(theContent.text);
    document.getElementById('home__hero-video').src = theContent.video;
    document.getElementById('home__hero-fallback').src = theContent.image;
});