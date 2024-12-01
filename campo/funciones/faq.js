// Preguntas frecuentes divididas por secciones
const faqSections = [
  {
    section: "Reservas",
    faqs: [
      { question: "¿C&oacute;mo puedo hacer una reserva?", 
        answer: "Puedes hacer tu reserva en l&iacute;nea a trav&eacute;s de nuestro sitio web o llam&aacute;ndonos directamente." 
      },
      { question: "¿Puedo modificar mi reserva?",
        answer: "S&iacute;, puedes modificar tu reserva hasta 24 horas antes de la fecha de llegada, sujeto a disponibilidad."
      },
    ],
  },
  {
    section: "Servicios",
    faqs: [
      { question: "¿El hotel cuenta con Wi-Fi gratuito?",
        answer: "S&iacute;, ofrecemos conexi&oacute;n Wi-Fi gratuita en todas las &aacute;reas comunes y habitaciones."
      },
      { question: "¿El hotel ofrece servicio de transporte?",
        answer: "S&iacute;, ofrecemos transporte desde y hacia el aeropuerto con reserva previa."
      },
    ],
  },
  {
    section: "Sobre Check-in y Check-out",
    faqs: [
      { question: "¿A qu&eacute; hora es el check-in y el check-out?",
        answer: "El check-in es a partir de las 15:00 y el check-out debe realizarse antes de las 11:00."
      },
      { question: "¿Puedo hacer un check-in temprano o un check-out tard&iacute;o?",
        answer: "Dependiendo de la disponibilidad, podemos ofrecer check-in temprano o check-out tard&iacute;o. Pueden aplicar cargos adicionales."
      },
    ],
  },
];

const accordionContainer = document.getElementById("accordionFAQ");

faqSections.forEach((section, sectionIndex) => {

  const sectionHeader = `<h3>${section.section}</h3>`;
  accordionContainer.insertAdjacentHTML("beforeend", sectionHeader);

  section.faqs.forEach((faq, index) => {
    const faqItem = `
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button ${index !== 0 || sectionIndex !== 0 ? "collapsed" : ""}" 
                  type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#faq${sectionIndex}-${index}" 
                  aria-expanded="${index === 0 && sectionIndex === 0}" 
                  aria-controls="faq${sectionIndex}-${index}">
            ${faq.question}
          </button>
        </h3>
        <div id="faq${sectionIndex}-${index}" 
             class="accordion-collapse collapse ${index === 0 && sectionIndex === 0 ? "show" : ""}" 
             data-bs-parent="#accordionFAQ">
          <div class="accordion-body">
            ${faq.answer}
          </div>
        </div>
      </div>
    `;
    accordionContainer.insertAdjacentHTML("beforeend", faqItem);
  });

  if (sectionIndex < faqSections.length - 1) {
    accordionContainer.insertAdjacentHTML("beforeend", "<br>");
  }
});
