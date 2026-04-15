AOS.init();

//Technology Feature Slider
const swiper = new Swiper(".swiper-slider", {
    // Optional parameters
    centeredSlides: true,
    slidesPerView: 1,
    grabCursor: true,
    freeMode: false,
    loop: true,
    mousewheel: true,
    keyboard: {
        enabled: true
    },

    // Enabled autoplay mode
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true
    },

    // If we need navigation
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // Responsive breakpoints
    breakpoints: {
        481: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        769: {
            slidesPerView: 1.25,
            spaceBetween: 20
        },
        1024: {
            slidesPerView: 1.25,
            spaceBetween: 20
        }
    }
});

if( $("#fund_security").length > 0 ){
    const box = document.getElementById("scroll_box");
    const img_doller = document.getElementById("img_doller");
    const img_euro = document.getElementById("img_euro");
    const img_pound = document.getElementById("img_pound");

    const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                img_doller.classList.remove("img-doller-move-out");
                img_euro.classList.remove("img-euro-move-out");
                img_pound.classList.remove("img-pound-move-out");
                img_doller.classList.add("img-doller-move-in");
                img_euro.classList.add("img-euro-move-in");
                img_pound.classList.add("img-pound-move-in");
            } else {
                img_doller.classList.remove("img-doller-move-in");
                img_euro.classList.remove("img-euro-move-in");
                img_pound.classList.remove("img-pound-move-in");
                img_doller.classList.add("img-doller-move-out");
                img_euro.classList.add("img-euro-move-out");
                img_pound.classList.add("img-pound-move-out");
            }
        });
    },
    {
        threshold: 0.8 // Trigger when 50% of the box is visible
    }
    );

    observer.observe(box);
}

if( $('#pivot_point_calculator_form').length > 0 ){
    $('#pivot_point_calculator_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: $("#pivot_point_calculator_form_url").val(),
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status === 'error') {
                    alert(response.message);
                    return;
                }

                const data = response;
                $(".result").removeClass('d-none');

                // console.log( response );
                // Standard
                $('#standardPivotPoint').html('<b>Pivot Point:</b> ' + data.standard.pivotPoint);
                $('#standardR1').html('<b>Resistance 1:</b> ' + data.standard.r1);
                $('#standardS1').html('<b>Support 1:</b> ' + data.standard.s1);
                $('#standardR2').html('<b>Resistance 2:</b> ' + data.standard.r2);
                $('#standardS2').html('<b>Support 2:</b> ' + data.standard.s2);
                $('#standardR3').html('<b>Resistance 3:</b> ' + data.standard.r3);
                $('#standardS3').html('<b>Support 3:</b> ' + data.standard.s3);

                // Fibonacci
                $('#fibonacciPivotPoint').html('<b>Pivot Point:</b> ' + data.fibonacci.pivotPoint);
                $('#fibonacciR1').html('<b>Resistance 1:</b> ' + data.fibonacci.r1);
                $('#fibonacciS1').html('<b>Support 1:</b> ' + data.fibonacci.s1);
                $('#fibonacciR2').html('<b>Resistance 2:</b> ' + data.fibonacci.r2);
                $('#fibonacciS2').html('<b>Support 2:</b> ' + data.fibonacci.s2);
                $('#fibonacciR3').html('<b>Resistance 3:</b> ' + data.fibonacci.r3);
                $('#fibonacciS3').html('<b>Support 3:</b> ' + data.fibonacci.s3);

                // Camarilla
                $('#camarillaPivotPoint').html('<b>Pivot Point:</b> ' + data.camarilla.pivotPoint);
                $('#camarillaR1').html('<b>Resistance 1:</b> ' + data.camarilla.r1);
                $('#camarillaS1').html('<b>Support 1:</b> ' + data.camarilla.s1);
                $('#camarillaR2').html('<b>Resistance 2:</b> ' + data.camarilla.r2);
                $('#camarillaS2').html('<b>Support 2:</b> ' + data.camarilla.s2);
                $('#camarillaR3').html('<b>Resistance 3:</b> ' + data.camarilla.r3);
                $('#camarillaS3').html('<b>Support 3:</b> ' + data.camarilla.s3);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('Something went wrong. Please try again.');
            }
        });
    });
}

if( $('#forex_profit_calculator_form').length > 0 ){
    $('#forex_profit_calculator_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: url + "/logic/forexProfitCalculator.php",
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status === 'success') {
                    const data = response.data;
                    $('#profit').html(`
                        <b>Your profit is:</b> ${data.deposit_currency} ${data.profit}<br>
                        <small>
                            Instrument: ${data.instrument} |
                            Type: ${data.trade_type} |
                            Lots: ${data.lot_size}
                        </small>
                    `);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", error);
                alert("Something went wrong. Please try again later.");
            }
        });
    });
}

if ($('#contact_us').length > 0) {
    $('#contact_us').on("submit", function(e) {
        resetFormError();
        e.preventDefault();
        $.ajax({
            url: $("#contact_submit_url").text(),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('.sent-message').text("").css('display', 'none');
                if (response.errors) {
                    $('#name-error').text(response.errors.name);
                    $('#email-error').text(response.errors.email);
                    $('#phone-error').text(response.errors.phone);
                    $('#subject-error').text(response.errors.name);
                    $('#message-error').text(response.errors.message);
                } else {
                    $('.sent-message').text( response.message ).css(
                        'display', 'block');
                    $('#contact_us')[0].reset();
                    resetFormError();

                    if( response.exist == 1 ){
                        window.open(url+'/contactus-thankyou?msg=1', '_blank');
                    } else {
                        window.open(url+'/contactus-thankyou?msg=0', '_blank');
                    }
                }
            }
        });

        function resetFormError() {
            $('#name-error').text('');
            $('#email-error').text('');
            $('#phone-error').text('');
            $('#subject-error').text('');
            $('#message-error').text('');
        }
    });
}

if ($("#request_callback_form").length > 0) {
    $("#request_callback_form").on("submit", function(e) {

        const button = $("#sending");
        button.prop("disabled", true).text("Wait...");

        e.preventDefault();
        $(".txt-msg").text('');
        $.ajax({
            url: $("#request_callback_submit_url").text(), // Backend script
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                var response = JSON.parse(response);
                if (response.status == "error") {
                    $(".text-warning").text(response.message);
                } else {
                    $(".text-success").text(response.message); // Show the message from backend
                    if( response.exist == 1 ){
                        window.open("{{ url('callback-thankyou?msg=1') }}", '_blank');
                    } else {
                        window.open("{{ url('callback-thankyou?msg=0') }}", '_blank');
                    }
                }
            },
            error: function(xhr) {
                console.log("Error " + xhr);
                $(".text-warning").text(xhr.statusText);
            },
            complete: function() {
                // Re-enable the button after the request completes
                button.prop("disabled", false).text("SEND");
            }
        });
    });
}

$(document).ready(function() {
    $('.openLiveAccount').on('click', function() {
        openNewTabLink('https://cabinet.zedcapital.com/register');
    });

    $('.loginLiveAccount').on('click', function() {
        openNewTabLink('https://cabinet.zedcapital.com/login');
    });

    $('.zedAcademyOpen').on('click', function() {
        openNewTabLink(url+'zed-academy.php');
    });
});

// SweetAlert2 with Bootstrap buttons
const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: "btn btn-success me-2",
        cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
});

function openNewTabLink( link ){
    window.open( link, '_blank');
}

var webTraderTerminalLiveLink = "https://webtrader.zedcapital.com/terminal";
var webTraderTerminalDemoLink = "https://demo.zedcapital.com/terminal";

if( $(".openMT5WebTrader").length > 0){
    // document.getElementById("openMT5WebTrader").addEventListener("click", function() {
    $(".openMT5WebTrader").on( "click", function(){
        swalWithBootstrapButtons.fire({
            title: "Choose Trading Account",
            // text: "You won't be able to revert this!",
            // icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Live",
            cancelButtonText: "Demo",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                openNewTabLink(webTraderTerminalLiveLink);
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                openNewTabLink(webTraderTerminalDemoLink);
            }
        });
    });
}

if( $(".owl-carousel").length >0 ){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
}

if( $("#productTradeSlider").length >0 ){
    $('#productTradeSlider').owlCarousel({
        loop: true,
        center: false,
        items: 4,
        margin: 0,
        autoplay: false,
        dots:false,
        // autoplayTimeout: 8500,
        smartSpeed: 1000000,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 3
            },
            1170: {
                items: 5
            }
        }
    });
}

// Render initial market cards
if ($("#market-slides").length > 0) {
    const zoom = 2.2;

    const markets = [
        { name: 'New York', slug: 'us', flag: 'US', lat: 40.7128, lng: -74.0060, open: 14.5, close: 21 },
        { name: 'London', slug: 'gb', flag: 'GB', lat: 51.5074, lng: -1.1278, open: 8, close: 16.5 },
        { name: 'Tokyo', slug: 'jp', flag: 'JP', lat: 35.6895, lng: 139.6917, open: 0, close: 6 },
        { name: 'Sydney', slug: 'au', flag: 'AU', lat: -33.8688, lng: 151.2093, open: 0, close: 6 },
        { name: 'Frankfurt', slug: 'de', flag: 'DE', lat: 52.1109, lng: 11.6821, open: 7, close: 19 },
        { name: 'Zurich', slug: 'ch', flag: 'CH', lat: 47.3769, lng: 8.5417, open: 8, close: 16.5 },
        { name: 'Toronto', slug: 'ca', flag: 'CA', lat: 43.6532, lng: -79.3832, open: 14.5, close: 21 },
        { name: 'Hong Kong', slug: 'hk', flag: 'HK', lat: 22.3193, lng: 114.1694, open: 1.5, close: 8 },
        { name: 'Shanghai', slug: 'cn', flag: 'CN', lat: 31.2304, lng: 121.4737, open: 1.5, close: 7 },
        { name: 'Shenzhen', slug: 'cn', flag: 'CN', lat: 22.5431, lng: 114.0579, open: 1.5, close: 7 },
        { name: 'Euronext', slug: 'nl', flag: 'NL', lat: 53.3676, lng: 4.9041, open: 8, close: 16.5 },
        { name: 'Mumbai', slug: 'in', flag: 'IN', lat: 19.0760, lng: 72.8777, open: 3.5, close: 10 }
    ];

    renderMarkets();
    setInterval(renderMarkets, 60000);


    function checkMarketOpen(market) {
        const now = new Date();
        const utcHour = now.getUTCHours() + now.getUTCMinutes() / 60;
        const open = market.open, close = market.close;

        if( ( now.getDay() == 6 || now.getDay() == 0 ) ){//&& market.flag == "IN"
            return false;
        } else {
            return ( utcHour >= open && utcHour < close ) || ( close < open && ( utcHour >= open || utcHour < close ) );
        }
    }

    function formatTime(h) {
        const hour = Math.floor(h);
        const min = Math.round((h - hour) * 60);
        return `${hour.toString().padStart(2, '0')}:${min.toString().padStart(2, '0')}`;
    }

    function buildTooltipContent(market) {
        const now = new Date();
        const utcH = now.getUTCHours() + now.getUTCMinutes() / 60;

        const localTime = new Date(now.toLocaleString('en-US', {
            timeZone: Intl.DateTimeFormat().resolvedOptions().timeZone
        }));
        const localTimeStr = localTime.toLocaleTimeString([], {
            hour: '2-digit',
            minute: '2-digit'
        });

        const open = market.open,
            close = market.close;
        const isOpen = checkMarketOpen(market);
        let percent = 0;

        if (isOpen) {
            const total = (close > open ? close - open : 24 - open + close);
            const current = utcH >= open ? utcH - open : 24 - open + utcH;
            percent = Math.min(100, (current / total) * 100);
        }

        return `
        <div class="map-tooltip">
            <div class="title"><img src='https://flagcdn.com/w20/${market.slug}.webp'/ alt='${market.name}'> ${market.name}</div>
            <div>Local time: <b>${localTimeStr}</b></div>
            <div class="status ${isOpen ? 'open' : 'closed'}">${isOpen ? 'OPEN' : 'CLOSED'}</div>
            <div class="timeline">
                <div class="bar" style="width:${( 100 - percent.toFixed(1) )}%;"></div>
            </div>
            <div style="font-size:12px;">UTC Timing: ${formatTime(open)}-${formatTime(close)}</div>
        </div>`;
    }

    function renderMarkets() {
        const container = document.getElementById("market-slides");
        container.innerHTML = '';
        const now = new Date();

        const utcHour = now.getUTCHours() + now.getUTCMinutes() / 60;
        const chunkSize = 4;

        for (let i = 0; i < markets.length; i += chunkSize) {
            const group = markets.slice(i, i + chunkSize);
            const slideItems = group.map(market => {
                let open = market.open;
                let close = market.close;
                let isOpen = checkMarketOpen(market);
                let percent = 0;

                if (isOpen) {
                    let total = (close > open ? close - open : 24 - open + close);
                    let current = (utcHour >= open ? utcHour - open : 24 - open + utcHour);
                    percent = (current / total) * 100;
                }

                return `
            <div class="col-md-3 mb-3">
                <div class="market ${isOpen ? '' : 'closed'}">
                    <h5><img src='https://flagcdn.com/w40/${market.slug}.webp'/ alt='${market.name}'> ${market.name}</h5>
                    <div class="status">${isOpen ? 'OPEN' : 'CLOSED'}</div>
                    <div class="timeline">
                        <div class="bar" style="width:${isOpen ? (100 - percent.toFixed(1) ) : 0}%;"></div>
                    </div>
                    <small>
                        <p class="m-0 p-0">
                            UTC Hours: ${formatTime(open)} - ${formatTime(close)}
                        </p>
                        <p class="m-0 p-0">
                            Current Time: ${now.getHours()}:${now.getMinutes()}
                        </p>
                    </small>
                </div>
            </div>
            `;
            }).join('');

            container.innerHTML += `
            <div class="carousel-item ${i === 0 ? 'active' : ''}">
                <div class="row justify-content-center px-4">
                    ${slideItems}
                </div>
            </div>
        `;
        }
    }

    // Detect if the user is on a mobile device
    const isMobile = window.innerWidth < 768; // You can adjust the breakpoint
    function initMap() {
        const map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 15,
                lng: 10
            },
            zoom: zoom,
            minZoom: zoom,
            maxZoom: zoom,
            draggable: isMobile,
            scrollwheel: isMobile,
            // disableDefaultUI: isMobile, // optional: hides controls on mobile
            disableDoubleClickZoom: isMobile,
            mapTypeControl: false,
            streetViewControl: false,
            fullscreenControl: isMobile,
            gestureHandling: 'none',
            styles: [{
                    featureType: "all",
                    elementType: "labels",
                    stylers: [{
                        visibility: "off"
                    }]
                },
                {
                    featureType: "landscape",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f1f1f1"
                    }]
                },
                {
                    featureType: "administrative.country",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#f1eeee"
                    }, {
                        weight: 1.5
                    }]
                },
                {
                    featureType: "water",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#ffffff"
                    }]
                },
                {
                    featureType: 'administrative',
                    elementType: 'geometry',
                    stylers: [{
                        visibility: 'off'
                    }]
                }
            ]
        });

        markets.forEach(market => {
            const isOpen = checkMarketOpen(market);
            const iconUrl = `https://flagcdn.com/w80/${market.slug}.webp`;

            class CustomMarker extends google.maps.OverlayView {
                constructor(position, map) {
                    super();
                    this.position = position;
                    this.map = map;
                    this.div = null;
                    this.setMap(map);
                }

                onAdd() {
                    this.div = document.createElement('div');
                    if (isOpen) {
                        this.div.className = 'pulse-marker';
                    } else {
                        this.div.className = 'static-marker';
                    }
                    this.div.style.backgroundImage = `url(${iconUrl})`;
                    this.div.style.backgroundSize = `24px 24px`;

                    const panes = this.getPanes();
                    panes.overlayMouseTarget.appendChild(this.div);

                    this.div.addEventListener('mouseover', () => {
                        infoWindow.setContent(buildTooltipContent(market));
                        infoWindow.setPosition(this.position);
                        infoWindow.open(this.map);
                    });

                    this.div.addEventListener('mouseout', () => infoWindow.close());
                }

                draw() {
                    const overlayProjection = this.getProjection();
                    const pos = overlayProjection.fromLatLngToDivPixel(this.position);
                    if (pos && this.div) {
                        this.div.style.left = pos.x - 16 + 'px';
                        this.div.style.top = pos.y - 16 + 'px';
                    }
                }

                onRemove() {
                    if (this.div) {
                        this.div.parentNode.removeChild(this.div);
                        this.div = null;
                    }
                }
            }

            const infoWindow = new google.maps.InfoWindow();
            new CustomMarker(new google.maps.LatLng(market.lat, market.lng), map);
        });

        setInterval(() => map.panTo(map.getCenter()), 60000);
    }
}

if( $("#newsContainer").length >0 ){
    document.addEventListener("DOMContentLoaded", async () => {
        const container = document.getElementById("newsContainer");
        const loader = document.getElementById("loader");
        const errorMsg = document.getElementById("errorMsg");

        try {
            const response = await fetch("https://livechart.zedcapital.com:5000/api/news?pageSize=6");
            if (!response.ok) throw new Error("Network response was not ok");

            const jsonData = await response.json();
            const newsData = jsonData.data || [];

            loader.style.display = "none";

            if (newsData.length === 0) {
            container.innerHTML = `<p class="text-center text-muted">No news available.</p>`;
            return;
            }

            newsData.forEach(news => {
            const sentimentClass =
                news.sentiment === "Positive" ? "sentiment-positive" :
                news.sentiment === "Negative" ? "sentiment-negative" :
                "sentiment-neutral";

            const topics = news.topics?.map(topic =>
                `<span class="badge bg-secondary px-3 py-2 topic-badge">${topic}</span>`
            ).join(" ") || "";

            const cardHTML = `
                <div class="col-6 mb-4">
                    <div class="py-3 set-news-min-height border-bottom border-gray-200">
                        <h6>
                            <a href="${news.url}" target="_blank" class="text-decoration-none text-dark">
                                ${news.title}
                            </a>
                        </h6>
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text small mb-1"><strong>Source:</strong> ${news.source}</p>
                                <p class="card-text small mb-1"><strong>Pair:</strong> ${news.pair}</p>
                                <p class="card-text small mb-1"><strong>Sentiment:</strong> <span class="${sentimentClass}">${news.sentiment}</span></p>
                            </div>
                            <div class="col-6">
                                ${topics ? `<div class="mb-4 text-end">${topics}</div>` : ""}
                                <p class="card-text small text-muted mt-auto text-end">🕓 ${news.published_gst || ""}</p>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML("beforeend", cardHTML);
            });
        } catch (error) {
            console.error("Error fetching news:", error);
            loader.style.display = "none";
            errorMsg.classList.remove("d-none");
        }
    });
}

if( $("#testimonialCarouselMulti").length > 0 ){
    const testimonials = [{
        text: "Great service, highly recommended!",
        name: "John Doe",
        position: "CEO, Company A"
    },
    {
        text: "Amazing experience working with this team.",
        name: "Jane Smith",
        position: "Manager, Company B"
    },
    {
        text: "Professional and reliable service every time.",
        name: "Mark Wilson",
        position: "Entrepreneur"
    },
    {
        text: "Outstanding support and guidance.",
        name: "Alice Brown",
        position: "CTO, Company C"
    },
    {
        text: "They truly understand their clients.",
        name: "Bob Martin",
        position: "Director, Company D"
    }
    ];

    const container = document.getElementById('testimonialContainerMulti');
    const itemsPerSlide = 3;

    // Split testimonials into chunks
    for (let i = 0; i < testimonials.length; i += itemsPerSlide) {
        const chunk = testimonials.slice(i, i + itemsPerSlide);
        const div = document.createElement('div');
        div.classList.add('carousel-item');
        if (i === 0) div.classList.add('active');

        div.innerHTML = chunk.map(t => `
        <div class="testimonial-card">
            <p>"${t.text}"</p>
            <h5>${t.name}</h5>
            <small>${t.position}</small>
        </div>
        `).join('');

        container.appendChild(div);
    }
}

/**
 *
 */
function getMarketPriceHistory( cleanedSymbolName, cleanedSymbol, stock, commission ){
    return `
        <tr>
            <td>
                <div class="d-flex align-items-center gap-2 text-start">
                    <img src="${stock.image}" class="rounded-circle border" style="width:28px;height:28px;object-fit:cover;" alt="${cleanedSymbolName}">
                    <div>
                        <div class="fw-semibold">${cleanedSymbol}</div>
                        <small class="text-muted">${cleanedSymbolName}</small>
                    </div>
                </div>
            </td>
            <td>
                ${stock.Bid}
            </td>
            <td>
                ${stock.Ask}
            </td>
            <td>
                <span class="badge bg-secondary-subtle text-dark">${stock.Spread}</span>
            </td>
            <td>
                <span class="text-success fw-semibold">${commission}</span>
            </td>
            <td>
                <span class="${stock.SwapLong < 0 ? 'badge bg-danger' : 'badge bg-success'} text-white fw-semibold">
                    ${Math.abs(stock.SwapLong)}
                </span>
            </td>
            <td>
                <span class="${stock.SwapShort < 0 ? 'badge bg-danger' : 'badge bg-success'} text-white fw-semibold">
                    ${Math.abs(stock.SwapShort)}
                </span>
            </td>
            <td>
                <span class="${(stock.Ask - stock.PriceClose).toFixed(2) < 0 ? 'badge bg-danger' : 'badge bg-success'} text-white fw-semibold">
                    ${(stock.Ask - stock.PriceClose).toFixed(2)}
                </span>
            </td>
        </tr>`;
}
function checkNextPage() {
    let start = (page * limit) + 1;
    let end = (page * limit) + limit;
    let pagination = start + "-" + end;

    $.ajax({
        url: `${APIURL}?group=${group}&subgroup=${subgroup}&page=${pagination}`,
        method: "GET",
        success: function (data) {
            if (data.length > 0){
                $(".next-btn").show();
            } else{
                $(".next-btn").hide();
            }
        },
        error: function () {
            $(".next-btn").hide();
        }
    });
}

$(".next-btn").on("click", function () {
    page++;
    $(".prev-btn").show();
    fetchStocks();
    scrollToTabs();
});

$(".prev-btn").on("click", function () {
    if (page > 1) {
        page--;
        fetchStocks();
        if (page === 1){
            $(".prev-btn").hide();
        }
        scrollToTabs();
    }
});

function scrollToTabs() {
    $('html, body').animate({
        scrollTop: $('#custom-tabs').offset().top - 140 // 20px padding
    }, 1000); // smooth 0.6 sec scroll
}
