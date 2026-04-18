@extends ('layout.layout')

@section ('title', 'Términos y Condiciones - Vittorio')

@section ('content')
  <div class="terminos-page">
    <section class="terminos-hero">
      <div>
        <div>
          <h1>Términos y Condiciones</h1>
          <p>Marco legal, políticas de privacidad y garantías de ingeniería. Documentación elaborada para una experiencia confiable y transparente.</p>
        </div>
        <aside class="hero-info">
          <span>Documentación Legal V.2</span>
          <p>Si tiene dudas o necesita orientación, nuestro equipo está listo para brindar soporte corporativo con la máxima discreción.</p>
          <a href="/contacto">Contactar</a>
        </aside>
      </div>
    </section>

    <section class="terminos-content">
      <div>
        <aside class="terminos-sidebar">
          <nav>
            <a href="#intro">Introducción</a>
            <a href="#privacy">Privacidad</a>
            <a href="#warranty">Garantía Limitada</a>
            <a href="#shipping">Envíos y Devoluciones</a>
            <a href="#intellectual">Propiedad Intelectual</a>
          </nav>
          <div class="sidebar-card">
            <h4>Asistencia Legal</h4>
            <p>¿Tiene dudas sobre nuestras políticas? Nuestro equipo legal está disponible para consultas corporativas.</p>
            <a href="/contacto">Contactar</a>
          </div>
        </aside>

        <article class="terminos-article">
          <section id="intro" class="terminos-section">
            <div>
              <span>01</span>
              <h2>Uso de la Plataforma</h2>
            </div>
            <div>
              <p>Bienvenido a Vittorio. Al acceder a este sitio web y adquirir cualquiera de nuestras piezas de horología técnica, usted acepta estar sujeto a estos términos y condiciones de uso, todas las leyes y regulaciones aplicables, y acepta que es responsable del cumplimiento de las leyes locales aplicables.</p>
              <p>Los materiales contenidos en este sitio web están protegidos por las leyes de derechos de autor y marcas registradas aplicables. Vittorio se reserva el derecho de modificar estos términos en cualquier momento sin previo aviso. El uso continuado de la plataforma tras dichas modificaciones constituirá su aceptación de los nuevos términos.</p>
            </div>
          </section>

          <section id="privacy" class="terminos-section">
            <div>
              <span>02</span>
              <h2>Política de Privacidad</h2>
            </div>
            <div>
              <p>Su privacidad es de suma importancia para la ingeniería de nuestra relación. Es política de Vittorio respetar su privacidad con respecto a cualquier información que podamos recopilar mientras operamos nuestro sitio web.</p>
              <ul>
                <li>
                  <span data-icon="check">✓</span>
                  <span>Solo solicitamos información personal cuando la necesitamos realmente para brindarle un servicio de alta precisión.</span>
                </li>
                <li>
                  <span data-icon="check">✓</span>
                  <span>La recopilamos por medios justos y legales, con su conocimiento y consentimiento.</span>
                </li>
                <li>
                  <span data-icon="check">✓</span>
                  <span>No compartimos ninguna información de identificación personal públicamente o con terceros, excepto cuando lo exija la ley.</span>
                </li>
              </ul>
            </div>
          </section>

          <section id="warranty" class="terminos-section">
            <div>
              <span>03</span>
              <h2>Garantía de Ingeniería</h2>
            </div>
            <div class="section-grid">
              <div>
                <h3>Cobertura Estándar</h3>
                <p>Todas las piezas Vittorio cuentan con una garantía limitada de 5 años contra defectos de fabricación en el movimiento y la estructura de la caja. Esta garantía no cubre el desgaste natural del material ni daños por uso indebido fuera de las especificaciones técnicas proporcionadas.</p>
              </div>
              <div>
                <h3>Servicio Técnico</h3>
                <p>Para mantener la integridad de la pieza, cualquier intervención técnica debe ser realizada exclusivamente por centros autorizados Vittorio. La apertura de la caja por personal no autorizado anula inmediatamente cualquier garantía vigente.</p>
              </div>
            </div>
          </section>

          <section id="shipping" class="terminos-section">
            <div>
              <span>04</span>
              <h2>Logística de Entrega</h2>
            </div>
            <div>
              <p>Debido a la naturaleza exclusiva de nuestras piezas, cada envío se realiza bajo estrictos protocolos de seguridad y seguro de valor total. Los tiempos de entrega pueden variar según la complejidad del ensamblaje y la ubicación geográfica del destinatario.</p>
              <div class="section-grid">
                <div>
                  <p>Certificación de Envío</p>
                  <p>Transporte blindado y seguimiento satelital 24/7 para envíos internacionales.</p>
                </div>
                <span data-icon="precision_manufacturing">✓</span>
              </div>
            </div>
          </section>
        </article>
      </div>
    </section>

    <section class="terminos-footer">
      <div>
        <h3>Suscríbase a la Excelencia</h3>
        <p>Reciba actualizaciones exclusivas sobre lanzamientos de edición limitada y eventos privados de curaduría horológica.</p>
        <form>
          <input placeholder="CORREO ELECTRÓNICO" type="email" />
          <button>Unirse</button>
        </form>
      </div>
    </section>
  </div>
@endsection
