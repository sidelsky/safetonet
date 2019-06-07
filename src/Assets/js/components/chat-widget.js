//Localhost contact page ID's 
let contactPageIDLocal = {
  contact_EN: '262',
  contact_ES: '719',
  contact_DE: '721'
}

//Staging and Live contact page ID's 
let contactPageIDLive = {
  contact_EN: '262',
  contact_ES: '694',
  contact_DE: '1045'
}

//Local 
let contact_EN_Local = document.querySelector(`.page-id-${contactPageIDLocal.contact_EN}`);
let contact_ES_Local = document.querySelector(`.page-id-${contactPageIDLocal.contact_ES}`);
let contact_DE_Local = document.querySelector(`.page-id-${contactPageIDLocal.contact_DE}`);

//Live 
let contact_EN_Live = document.querySelector(`.page-id-${contactPageIDLive.contact_EN}`);
let contact_ES_Live = document.querySelector(`.page-id-${contactPageIDLive.contact_ES}`);
let contact_DE_Live = document.querySelector(`.page-id-${contactPageIDLive.contact_DE}`);

/** 
 * ES Form 
 */
if (contact_ES_Local || contact_ES_Live) {

  var preChatTemplate = {
    //Form header color and Submit button color. 
    mainbgColor: '#0aa4db',
    //Form Header Text and Submit button text color. 
    maintxColor: '#fff',
    //Chat Form Title 
    heading: 'Habla Con Nosotros',
    //Chat form Welcome Message 
    textBanner: 'Hola, ¡bienvenido a SafeToNet! Para empezar a chatear con nosotros necesitamos algo más de información. Una vez la tengamos, ¡podremos ponerte en contacto con un miembro de nuestro equipo!',
    //Submit Button Label. 
    SubmitLabel: 'Empezar Chat',
    //Fields List - Maximum is 5 
    //All the values are mandatory and the script will not work if not available. 
    fields: {
      field1: {
        //Type for Name - Do not Change 
        type: "name",
        //Label for Field Name, can be in any language 
        label: "Nombre Completo",
        //Default - Field ID for Name - Do Not Change 
        fieldId: "name",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Por favor, introduce un nombre válido"
      },
      field2: {
        //Type for Email - Do Not Change 
        type: "email",
        //Label for Field Email, can be in any language 
        label: "Correo electrónico",
        //Default - Field ID for Email - Do Not Change 
        fieldId: "email",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Por favor, introduce un correo válido"
      },
      field3: {
        //Type for Phone - Do Not Change 
        type: "phone",
        //Label for Field Phone, can be in any language 
        label: "Número de Teléfono",
        //Default - Field ID for Phone - Do Not Change 
        fieldId: "phone",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Por favor, introduce un número de teléfono válido"
      }
    }
  };
  window.fcSettings = {
    token: '3f81de1f-38fe-446c-850f-10f5ae7a284b',
    host: "https://wchat.freshchat.com",
    config: {
      cssNames: {
        //The below element is mandatory. Please add any custom class or leave the default. 
        widget: 'custom_fc_frame',
        //The below element is mandatory. Please add any custom class or leave the default. 
        expanded: 'custom_fc_expanded'
      }
    },
    onInit: function () {
      //console.log('widget init'); 
      fcPreChatform.fcWidgetInit(preChatTemplate);
    }
  };

}



/** 
 * DE Form 
 */
if (contact_DE_Local || contact_DE_Live) {

  var preChatTemplate = {
    //Form header color and Submit button color. 
    mainbgColor: "#0aa4db",
    //Form Header Text and Submit button text color. 
    maintxColor: "#fff",
    //Chat Form Title 
    heading: "SafeToNet Live Chat",
    //Chat form Welcome Message 
    textBanner: "Hallo, willkommen bei SafeToNet! Um mit uns zu chatten, brauchen wir ein paar Informationen von Ihnen. Wir werden Sie dann sofort mit dem nächsten verfügbaren Teammitglied verbinden!",
    //Submit Button Label. 
    SubmitLabel: "Start Chat",
    //Fields List - Maximum is 5 
    //All the values are mandatory and the script will not work if not available. 
    fields: {
      field1: {
        //Type for Name - Do not Change 
        type: "name",
        //Label for Field Name, can be in any language 
        label: "Vollständiger Name",
        //Default - Field ID for Name - Do Not Change 
        fieldId: "name",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Bitte geben Sie einen gültigen Namen ein"
      },
      field2: {
        //Type for Email - Do Not Change 
        type: "email",
        //Label for Field Email, can be in any language 
        label: "E-mail Adresse",
        //Default - Field ID for Email - Do Not Change 
        fieldId: "email",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Bitte geben Sie eine gültige E-mail Adresse ein"
      },
      field3: {
        //Type for Phone - Do Not Change 
        type: "phone",
        //Label for Field Phone, can be in any language 
        label: "Telefonnummer",
        //Default - Field ID for Phone - Do Not Change 
        fieldId: "phone",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Bitte geben Sie eine gültige Telefonnummer ein"
      }
    }
  };
  window.fcSettings = {
    token: '3f81de1f-38fe-446c-850f-10f5ae7a284b',
    host: "https://wchat.freshchat.com",
    config: {
      cssNames: {
        //The below element is mandatory. Please add any custom class or leave the default. 
        widget: 'custom_fc_frame',
        //The below element is mandatory. Please add any custom class or leave the default. 
        expanded: 'custom_fc_expanded'
      }
    },
    onInit: function () {
      //console.log('widget init'); 
      fcPreChatform.fcWidgetInit(preChatTemplate);
    }
  };

}


/** 
 * EN Form 
 */
if (contact_EN_Local || contact_EN_Live) {

  var preChatTemplate = {
    //Form header color and Submit button color. 
    mainbgColor: '#0aa4db',
    //Form Header Text and Submit button text color. 
    maintxColor: '#fff',
    //Chat Form Title 
    heading: 'SafeToNet Live Chat',
    //Chat form Welcome Message 
    textBanner: 'Hi, welcome to SafeToNet! To start a chat with us, we just need a few details. We will then put you in contact with our next available agent!',
    //Submit Button Label. 
    SubmitLabel: 'Start chat',
    //Fields List - Maximum is 5 
    //All the values are mandatory and the script will not work if not available. 
    fields: {
      field1: {
        //Type for Name - Do not Change 
        type: "name",
        //Label for Field Name, can be in any language 
        label: "Full Name",
        //Default - Field ID for Name - Do Not Change 
        fieldId: "name",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Please enter a valid name"
      },
      field2: {
        //Type for Email - Do Not Change 
        type: "email",
        //Label for Field Email, can be in any language 
        label: "Email",
        //Default - Field ID for Email - Do Not Change 
        fieldId: "email",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Please enter a valid email address"
      },
      field3: {
        //Type for Phone - Do Not Change 
        type: "phone",
        //Label for Field Phone, can be in any language 
        label: "Mobile",
        //Default - Field ID for Phone - Do Not Change 
        fieldId: "phone",
        //Required "yes" or "no" 
        required: "yes",
        //Error text to be displayed 
        error: "Please enter a valid mobile number"
      }
    }
  };
  window.fcSettings = {
    token: '3f81de1f-38fe-446c-850f-10f5ae7a284b',
    host: "https://wchat.freshchat.com",
    config: {
      cssNames: {
        //The below element is mandatory. Please add any custom class or leave the default. 
        widget: 'custom_fc_frame',
        //The below element is mandatory. Please add any custom class or leave the default. 
        expanded: 'custom_fc_expanded'
      }
    },
    onInit: function () {
      //console.log('widget init'); 
      fcPreChatform.fcWidgetInit(preChatTemplate);
    }
  };

}