require('./bootstrap');
import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import { SplitText } from "gsap/SplitText.js";
import { TextPlugin } from "gsap/TextPlugin.js";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(SplitText);
gsap.registerPlugin(TextPlugin);


function inspire() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "inspire", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function encourage() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "encourage", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function love() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "love", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function support() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "support", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function motivate() {
    var split = new SplitText("#statement", {type: "chars"});
    var tl = gsap.timeline({repeat: 1, repeatDelay: 1, yoyo: true});
    tl.to("#statement", {duration: 1.25, text: "motivate", ease: "none"})
        .to(split.chars, {stagger: 0.6})
    return tl;
}

function animate(){
    var master = gsap.timeline({onComplete: animate});
    master.add(inspire())
        .add(encourage())
        .add(love())
        .add(support())
        .add(motivate())
}

function summerstick(){
    gsap.to('#summer-stick', {ease: "power2.in", right: -400, scrollTrigger: {
            trigger: '#next-steps',
            start: 'top center',
            scrub: true,
        }});

}

window.addEventListener('load', function(){
    animate();
    summerstick();
})

