$(document).ready(function () {

    const navLinkList = document.querySelectorAll('.navbar .nav-link');
    // console.log('navLinkList', navLinkList);
    // console.log(navbar, 'navbar')

    const navbar = document.getElementById('navbar')

    const scrollReport = document.getElementById('scrollReport')

    // console.log(navLinkList, 'navLinkList')
    // console.log(scrollReport, 'scrollReport')

    const navigationTable = {};

    
    navLinkList.forEach(value => {
        // console.log('value',value)

        // const sectionId = value.dataset.target;
        // navigationTable[sectionId] = {
        //     link: value,
        //     section: document.getElementById(sectionId)
        // }
        const sectionID = value.dataset.target;
        console.log('sectionID', sectionID);

        navigationTable[sectionID] = {
            link: value,
            section: document.getElementById(sectionID)
        };
    });


   
    window.addEventListener('scroll', function () {
       
        const y = Math.round(window.scrollY + navbar.offsetHeight);
       
        scrollReport.innerText = `目前所在的位置${y}`;
       

        for (const key in navigationTable) {
           
            const link = navigationTable[key].link;
            const section = navigationTable[key].section;
           

            const top = section.offsetTop;
            const bottom = top + section.offsetHeight;

            if(y > top && y < bottom){
                link.classList.add('text-warning');
                section.classList.add('is-active');
            }else{
                link.classList.remove('text-warning');
                section.classList.remove('is-active');
            }

        }
    });



});




