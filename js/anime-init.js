var ml4 = {};
ml4.opacityIn = [0, 1];
ml4.scaleIn = [1, 1];
ml4.scaleOut = 1.2;
ml4.durationIn = 1000;
ml4.durationOut = 800;
ml4.delay = 500;

anime.timeline({ loop: false })
    .add({
        targets: '.ml4 .item-1',
        opacity: ml4.opacityIn,
        scale: ml4.scaleIn,
        duration: ml4.durationIn
    }).add({
        targets: '.ml4 .item-1',
        opacity: 0,
        scale: ml4.scaleOut,
        duration: ml4.durationOut,
        easing: "easeOutCubic",
        delay: ml4.delay
    }).add({
        targets: '.ml4 .item-2',
        opacity: ml4.opacityIn,
        scale: ml4.scaleIn,
        duration: ml4.durationIn
    }).add({
        targets: '.ml4 .item-2',
        opacity: 0,
        scale: ml4.scaleOut,
        duration: ml4.durationOut,
        easing: "easeOutCubic",
        delay: ml4.delay
    }).add({
        targets: '.ml4',
        opacity: 0,
        duration: 500,
        delay: 500
    });