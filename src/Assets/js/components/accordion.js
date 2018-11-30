export default class Accordion {
    
    constructor() {
        this.accordionTrigger = document.getElementsByClassName('accordion');
        
        for (let i = 0; i < this.accordionTrigger.length; i++) {
            let currentElement = this.accordionTrigger[i];
            currentElement.addEventListener('click', (e) => this.handleClick(e) );
        }
        
    }
    
    handleClick(e) {
        e.target.parentElement.classList.toggle('active')
    }

}

