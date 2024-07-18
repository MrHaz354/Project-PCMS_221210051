const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})
var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}

window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})

const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

    document.addEventListener('DOMContentLoaded', function() {
        const dashboardMenu = document.querySelector('.side-menu.top li.active');
        const submenu = document.createElement('ul');
        submenu.classList.add('submenu');
        
        const submenuItems = [
            { text: 'Home', route: '{{ route("homes") }}', iconClass: 'bx bxs-home' },
            { text: 'Profile', route: '{{ route("profile") }}', iconClass: 'bx bxs-user-pin' },
            { text: 'Contact Us', route: '{{ route("contactus") }}', iconClass: 'bx bxs-doughnut-chart' },
            { text: 'Admin', route: '{{ route("admin") }}', iconClass: 'bx bxs-group' },
            { text: 'Message', route: '#', iconClass: 'bx bxs-message-dots' },
            { text: 'Link Footers', route: '#', iconClass: 'bx bx-link' },
        ];

        submenuItems.forEach(item => {
            const li = document.createElement('li');
            const a = document.createElement('a');
            a.href = item.route;
            const icon = document.createElement('i');
            icon.className = item.iconClass;
            const span = document.createElement('span');
            span.className = 'text';
            span.textContent = item.text;
            a.appendChild(icon);
            a.appendChild(span);
            li.appendChild(a);
            submenu.appendChild(li);
        });

        dashboardMenu.addEventListener('click', function() {
            if (dashboardMenu.contains(submenu)) {
                dashboardMenu.removeChild(submenu);
            } else {
                dashboardMenu.appendChild(submenu);
            }
        });
    });