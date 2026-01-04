# 📊 Configuración de Google Analytics 4

## ¿Qué se ha instalado?

He agregado **Google Analytics 4** (GA4) a tu landing page con:
- ✅ Script de tracking en el `<head>`
- ✅ Función personalizada `trackEvent()` para eventos específicos
- ✅ Tracking automático de clics en el botón CTA
- ✅ Tracking del formulario de contacto (inicio, éxito, errores)

---

## 🚀 Cómo activar Google Analytics

### Paso 1: Crear cuenta de Google Analytics

1. Ve a [https://analytics.google.com](https://analytics.google.com)
2. Inicia sesión con tu cuenta de Google
3. Haz clic en **"Empezar a medir"** (o "Start measuring")
4. Crea una **cuenta** (nombre: "Aimi S.L.")
5. Crea una **propiedad** (nombre: "Landing Propietarios")
   - Zona horaria: España
   - Moneda: EUR
6. Completa la información del negocio
7. Acepta los términos de servicio

### Paso 2: Configurar flujo de datos web

1. Selecciona **"Web"** como plataforma
2. Introduce la URL de tu sitio: `https://jaeirasnieto.github.io/landingPagePropietarios`
3. Nombre del flujo: "Landing Propietarios"
4. Haz clic en **"Crear flujo"**

### Paso 3: Copiar tu ID de medición

1. Verás un **ID de medición** con formato `G-XXXXXXXXXX`
2. Copia este ID (por ejemplo: `G-ABC123XYZ`)

### Paso 4: Actualizar el código

1. Abre `landing-propietarios.html`
2. Busca estas dos líneas (están en el `<head>`):
   ```html
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
   ```
   y
   ```javascript
   gtag('config', 'G-XXXXXXXXXX', {
   ```
3. Reemplaza **`G-XXXXXXXXXX`** con tu ID real (ambas apariciones)

### Paso 5: Verificar instalación

1. Sube los cambios a GitHub
2. Espera 1-2 minutos
3. Abre tu landing page
4. En Google Analytics, ve a **"Informes" → "Tiempo real"**
5. Deberías ver tu visita activa 🎉

---

## 📈 Eventos que se están tracking

Tu landing page ya está configurada para hacer seguimiento de:

### 1. **CTA Hero Button**
- **Categoría:** CTA
- **Acción:** click
- **Etiqueta:** "Hero CTA - Solicitar información"
- Se dispara cuando alguien hace clic en el botón principal del hero

### 2. **Validación del formulario**
- **Categoría:** Form
- **Acción:** validation_error
- **Etiqueta:** "Campos incompletos"
- Se dispara cuando el usuario intenta enviar el formulario con campos vacíos

### 3. **Inicio de envío del formulario**
- **Categoría:** Form
- **Acción:** submit_start
- **Etiqueta:** "Formulario contacto"
- Se dispara cuando el usuario hace clic en "Solicitar información" (después de validar)

### 4. **Envío exitoso**
- **Categoría:** Form
- **Acción:** submit_success
- **Etiqueta:** "Formulario enviado correctamente"
- Se dispara cuando el formulario se envía correctamente

---

## 📊 Métricas que verás en GA4

Una vez configurado, podrás ver:

- ✅ **Número de visitantes** en tiempo real
- ✅ **Páginas vistas**
- ✅ **Tiempo en el sitio**
- ✅ **Tasa de rebote**
- ✅ **Conversiones** (clics en CTA y envíos de formulario)
- ✅ **Origen del tráfico** (Google, redes sociales, directo, etc.)
- ✅ **Dispositivos** (móvil, desktop, tablet)
- ✅ **Ubicación geográfica** de los visitantes
- ✅ **Eventos personalizados** (los mencionados arriba)

---

## 🎯 Crear conversiones personalizadas (opcional)

Para ver mejor el rendimiento del formulario:

1. En GA4, ve a **"Configurar" → "Eventos"**
2. Encuentra el evento `submit_success`
3. Activa **"Marcar como conversión"**
4. Ahora podrás ver cuántas personas completaron el formulario en los informes

---

## 🔧 Solución de problemas

### No veo datos en Google Analytics

- **Espera 24-48 horas** - A veces GA4 tarda en procesar los primeros datos
- Verifica que hayas reemplazado `G-XXXXXXXXXX` con tu ID real
- Comprueba en "Tiempo real" mientras navegas por tu página
- Asegúrate de que no tienes bloqueadores de anuncios activos

### Los eventos no se registran

- Abre la consola del navegador (F12)
- Busca errores relacionados con `gtag` o `dataLayer`
- Verifica que la función `trackEvent()` esté definida

---

## 📝 Agregar más eventos (avanzado)

Si quieres trackear más acciones, usa esta función en cualquier lugar:

```javascript
trackEvent('Categoría', 'Acción', 'Etiqueta');
```

**Ejemplos:**

```javascript
// Trackear clic en número de teléfono del footer
onclick="trackEvent('Contact', 'click_phone', 'Footer phone number')"

// Trackear scroll hasta sección
trackEvent('Engagement', 'scroll', 'Llegó a sección FAQ')

// Trackear expansión de FAQ
onclick="trackEvent('FAQ', 'expand', 'Pregunta 1')"
```

---

## ✅ Checklist de configuración

- [ ] Cuenta de Google Analytics creada
- [ ] Propiedad y flujo de datos web configurados
- [ ] ID de medición copiado (formato `G-XXXXXXXXXX`)
- [ ] ID reemplazado en el código (2 lugares)
- [ ] Cambios subidos a GitHub
- [ ] Verificado en "Tiempo real" de GA4
- [ ] (Opcional) Evento `submit_success` marcado como conversión

---

## 🆘 ¿Necesitas ayuda?

Si tienes problemas:
1. Revisa la [documentación oficial de GA4](https://support.google.com/analytics/answer/9304153)
2. Verifica que el código esté bien implementado
3. Comprueba que tu sitio esté publicado y accesible públicamente

---

**Última actualización:** Enero 2026  
**Versión de Analytics:** Google Analytics 4 (GA4)
