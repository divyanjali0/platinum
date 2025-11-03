function generatePDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({ format: "a5", orientation: "portrait" });

    const gold = [212, 175, 55];
    const darkBlue = [10, 35, 80];

    const conf = {
        pickup: document.getElementById('conf_pickup')?.textContent || '-',
        dropoff: document.getElementById('conf_dropoff')?.textContent || '-',
        pickupDate: document.getElementById('conf_pickup_date')?.textContent || '-',
        dropoffDate: document.getElementById('conf_dropoff_date')?.textContent || '-',
        pickupTime: document.getElementById('conf_pickup_time')?.textContent || '-',
        dropoffTime: document.getElementById('conf_dropoff_time')?.textContent || '-',
        carName: document.querySelector('.form-step[data-step="1"] .card-title')?.textContent || '-',
        tripDays: document.getElementById('conf_days')?.textContent || '-',
        totalPrice: document.getElementById('conf_total')?.textContent || '-',
        name: document.getElementById('conf_name')?.textContent || '-',
        email: document.getElementById('conf_email')?.textContent || '-',
        phone: document.getElementById('conf_phone')?.textContent || '-',
        flight: document.getElementById('conf_flight')?.textContent || '-',
        passengers: document.getElementById('conf_passengers')?.textContent || '-',
        mileage: document.getElementById('conf_mileage')?.textContent || '-',
        driver: document.getElementById('conf_driver')?.textContent || '-',
        license: document.getElementById('conf_license')?.textContent || '-',
        other: document.getElementById('conf_other')?.textContent || '-',
        addons: Array.from(document.querySelectorAll('#conf_addons li')).map(li => li.textContent)
    };

    // --- Load Logo ---
    const logo = new Image();
    logo.src = 'http://localhost/platinum/assets/images/logo1.png'; 

    logo.onload = function() {
        finalizePDF(doc, conf, logo, gold, darkBlue);
    };

    logo.onerror = function(e) {
        console.error("Logo failed to load:", e);
        finalizePDF(doc, conf, null, gold, darkBlue); 
    };
}

function finalizePDF(doc, conf, logo, gold, darkBlue) {
    let y = 15;

    // --- HEADER ---
    if (logo) {
        const logoWidth = 40; 
        const logoHeight = 15;
        const centerX = 74 - logoWidth / 2;
        doc.addImage(logo, 'PNG', centerX, 5, logoWidth, logoHeight);
    }

    y += 10;

    doc.setFont('helvetica', 'normal');
    doc.setFontSize(9);

    // Split long address
    let addressLines = doc.splitTextToSize("No: 375/2/1, Seeduwa, Sri Lanka", 120);
    doc.text(addressLines, 74, y, { align: "center" });
    y += addressLines.length * 4;

    // Split long contact info
    let contactLines = doc.splitTextToSize("info@platinumdrive.lk | +94 76 820 0099", 120);
    doc.text(contactLines, 74, y, { align: "center" });
    y += contactLines.length * 4;

    // Booking number
    // let bookingNumber = conf.bookingNumber || "N/A";
    // doc.text(`Booking No: ${bookingNumber}`, 74, y, { align: "center" });
    // y += 6;

    // --- HEADER LINE ---
    doc.setDrawColor(gold[0], gold[1], gold[2]);
    doc.setLineWidth(0.5);
    doc.line(10, y, 140, y);
    y += 10;

    // --- TOTAL PRICE ---
    doc.setFont('helvetica', 'bold');
    doc.setFontSize(13);
    doc.setTextColor(darkBlue[0], darkBlue[1], darkBlue[2]);
    doc.text("Total Price", 74, y, { align: "center" });

    y += 6;
    doc.setTextColor(gold[0], gold[1], gold[2]);
    doc.setFontSize(18);
    doc.text(conf.totalPrice, 74, y, { align: "center" });

    y += 8;
    doc.setDrawColor(180, 180, 180);
    doc.setLineWidth(0.3);
    doc.line(25, y, 125, y);
    y += 8;

    // --- TRIP DETAILS BOX ---
    const tripBoxHeight = 50;
    doc.setFillColor(250, 250, 225);
    doc.rect(12, y, 116, tripBoxHeight, "F");
    doc.setDrawColor(darkBlue[0], darkBlue[1], darkBlue[2]);
    doc.roundedRect(12, y, 116, tripBoxHeight, 3, 3);

    doc.setFont('helvetica', 'bold');
    doc.setFontSize(11);
    doc.setTextColor(darkBlue[0], darkBlue[1], darkBlue[2]);
    doc.text("Trip Details", 70, y + 6, { align: "center" });

    let py = y + 13;
    doc.setFont('helvetica', 'normal');
    doc.setFontSize(9);
    doc.setTextColor(0, 0, 0);
    const lineSpacing = 6;

    doc.text(`Pickup: ${conf.pickup}`, 18, py);
    py += lineSpacing;
    doc.text(`Drop-off: ${conf.dropoff}`, 18, py);
    py += lineSpacing;
    doc.text(`Pickup Time: ${conf.pickupDate} ${conf.pickupTime}`, 18, py);
    py += lineSpacing;
    doc.text(`Drop-off Time: ${conf.dropoffDate} ${conf.dropoffTime}`, 18, py);
    py += lineSpacing;
    doc.text(`Car: ${conf.carName}`, 18, py);
    py += lineSpacing;
    doc.text(`Duration: ${conf.tripDays}`, 18, py);
    py += lineSpacing;

    y = py + 2;

    // --- PASSENGER DETAILS ---
    const passengerBoxHeight = 70;
    doc.setFillColor(250, 250, 225);
    doc.rect(12, y, 116, passengerBoxHeight, "F");
    doc.roundedRect(12, y, 116, passengerBoxHeight, 3, 3);

    doc.setFont('helvetica', 'bold');
    doc.setFontSize(11);
    doc.setTextColor(darkBlue[0], darkBlue[1], darkBlue[2]);
    doc.text("Passenger Details", 70, y + 6, { align: "center" });

    py = y + 13;
    doc.setFont('helvetica', 'normal');
    doc.setFontSize(9);
    doc.setTextColor(0, 0, 0);

    doc.text(`Name: ${conf.name}`, 18, py);
    py += lineSpacing;
    doc.text(`Phone: ${conf.phone}`, 18, py);
    py += lineSpacing;
    doc.text(`Email: ${conf.email}`, 18, py);
    py += lineSpacing;
    doc.text(`Flight Number: ${conf.flight}`, 18, py);
    py += lineSpacing;
    doc.text(`Passengers: ${conf.passengers}`, 18, py);
    py += lineSpacing;
    doc.text(`Mileage: ${conf.mileage}`, 18, py);
    py += lineSpacing;
    doc.text(`Driver: ${conf.driver}`, 18, py);
    py += lineSpacing;
    doc.text(`License: ${conf.license}`, 18, py);
    py += lineSpacing;

    y = py + 2;

    // --- ADD-ONS ---
    // doc.setFont('helvetica', 'bold');
    // doc.setFontSize(11);
    // doc.setTextColor(darkBlue[0], darkBlue[1], darkBlue[2]);
    // doc.text("Extras / Add-ons", 15, y);

    // y += 5;
    // doc.setFont('helvetica', 'normal');
    // doc.setFontSize(9);
    // doc.setTextColor(0, 0, 0);
    // if (conf.addons.length > 0) {
    //     conf.addons.forEach(addon => {
    //         let addonLines = doc.splitTextToSize(`- ${addon}`, 100);
    //         doc.text(addonLines, 18, y);
    //         y += addonLines.length * 4;
    //     });
    // } else {
    //     doc.text("- None", 18, y);
    //     y += 4;
    // }

    // --- FOOTER ---
    y += 6;
    doc.setDrawColor(gold[0], gold[1], gold[2]);
    doc.line(10, y, 140, y);
    y += 7;
    doc.setFont('helvetica', 'bold');
    doc.setFontSize(10);
    doc.setTextColor(darkBlue[0], darkBlue[1], darkBlue[2]);
    doc.text("Thank you for choosing Platinum Drive!", 74, y, { align: "center" });

    // --- SAVE ---
    doc.save("Booking_" + conf.name.replace(/\s+/g, "_") + ".pdf");
}
