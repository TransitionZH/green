plugin.tx_powermail {

	view {
		# cat=powermail_main/file; type=string; label= Path to template root (FE)
		templateRootPath = EXT:theme_default/Resources/Private/Extensions/Powermail/Templates/

		# cat=powermail_main/file; type=string; label= Path to template partials (FE)
		partialRootPath = EXT:theme_default/Resources/Private/Extensions/Powermail/Partials/

		# cat=powermail_main/file; type=string; label= Path to template layouts (FE)
		layoutRootPath = EXT:theme_default/Resources/Private/Extensions/Powermail/Layouts/
	}

	settings {

		main {
			# cat=powermail_additional//0010; type=int+; label= Storage PID: Save mails in a defined Page (normally set via Flexform)
			pid =

			# cat=powermail_additional//0020; type=text; label= Form Uid: Commaseparated list of forms to show (normally set via Flexform)
			form =

			# cat=powermail_additional//0030; type=boolean; label= Confirmation Page Active: Activate Confirmation Page (normally set via Flexform)
			confirmation =

			# cat=powermail_additional//0040; type=boolean; label= Double Optin Active: Activate Double Optin for Mail sender (normally set via Flexform)
			optin =

			# cat=powermail_additional//0050; type=boolean; label= Morestep Active: Activate Morestep Forms (normally set via Flexform)
			moresteps =
		}

		validation {
			# cat=powermail_additional//0100; type=boolean; label= Native Browser Validation: Validate User Input with HTML5 native browser validation on clientside
			native = 1

			# cat=powermail_additional//0110; type=boolean; label= JavaScript Browser Validation: Validate User Input with JavaScript on clientside
			client = 1

			# cat=powermail_additional//0120; type=boolean; label= PHP Server Validation: Validate User Input with PHP on serverside
			server = 1
		}

		receiver {
			# cat=powermail_main/enable/0200; type=boolean; label= Receiver Mail: Enable Email to Receiver
			enable = 1

			# cat=powermail_main//0210; type=boolean; label= Receiver Attachments: Add uploaded files to emails
			attachment = 1

			# cat=powermail_main//0220; type=options[both,html,plain]; label= Receiver Mail Format: Change mail format
			mailformat = both

			default {
				# cat=powermail_additional//0230; type=text; label= Default Sender Name: Sendername if no sender name given
				senderName =

				# cat=powermail_additional//0240; type=text; label= Default Sender Email: Sender-email if no sender email given
				senderEmail =
			}

			overwrite {
				# cat=powermail_additional//0250; type=text; label= Receiver overwrite Email: Commaseparated list of mail receivers overwrites flexform settings (e.g. receiver1@mail.com, receiver1@mail.com)
				email =

				# cat=powermail_additional//0252; type=text; label= Receiver overwrite Name: Receiver Name overwrites flexform settings (e.g. Receiver Name)
				name =

				# cat=powermail_additional//0254; type=text; label= Receiver overwrite SenderName: Sender Name for mail to receiver overwrites flexform settings (e.g. Sender Name)
				senderName =

				# cat=powermail_additional//0256; type=text; label= Receiver overwrite SenderEmail: Sender Email for mail to receiver overwrites flexform settings (e.g. sender@mail.com)
				senderEmail =

				# cat=powermail_additional//0258; type=text; label= Receiver overwrite Mail Subject: Subject for mail to receiver overwrites flexform settings (e.g. New Mail from website)
				subject =

				# cat=powermail_additional//0260; type=text; label= Receiver CC Email Addresses: Commaseparated list of cc mail receivers (e.g. rec2@mail.com, rec3@mail.com)
				cc =

				# cat=powermail_additional//0262; type=text; label= Receiver BCC Email Addresses: Commaseparated list of bcc mail receivers (e.g. rec2@mail.com, rec3@mail.com)
				bcc =

				# cat=powermail_additional//0264; type=text; label= Receiver Mail Return Path: Return Path for emails to receiver (e.g. return@mail.com)
				returnPath =

				# cat=powermail_additional//0266; type=text; label= Receiver Mail Reply Mail: Reply Email address for mail to receiver (e.g. reply@mail.com)
				replyToEmail =

				# cat=powermail_additional//0268; type=text; label= Receiver Mail Reply Name: Reply Name for mail to receiver (e.g. Mr. Reply)
				replyToName =

				# cat=powermail_additional//0270; type=options[1,2,3,4,5]; label= Receiver Mail Priority: Set mail priority for mail to receiver (e.g. 3)
				priority = 3
			}
			senderHeader {
				# cat=powermail_additional//0060; type=text; label= Server-Mail: If set, the Mail-Header Sender is set (RFC 2822 - 3.6.2 Originator fields)
				email = 
				
				# cat=powermail_additional//0070; type=text; label= Server-Name: you can define a name along with the mail address (optional)
				name = 
			}
		}

		sender {
			# cat=powermail_main/enable/0400; type=boolean; label= Sender Mail: Enable Email to Sender
			enable = 1

			# cat=powermail_main//0410; type=boolean; label= Sender Attachments: Add uploaded files to emails
			attachment = 0

			# cat=powermail_main//0420; type=options[both,html,plain]; label= Sender Mail Format: Change mail format
			mailformat = both

			default {
				# cat=powermail_additional//0430; type=text; label= Default Sender Name: Sendername if no sender name given
				senderName = Powermail
			}

			overwrite {
				# cat=powermail_additional//0450; type=text; label= Sender overwrite Email: Commaseparated list of mail receivers overwrites flexform settings (e.g. receiver1@mail.com, receiver1@mail.com)
				email =

				# cat=powermail_additional//0452; type=text; label= Sender overwrite Name: Receiver Name overwrites flexform settings (e.g. Receiver Name)
				name =

				# cat=powermail_additional//0454; type=text; label= Sender overwrite SenderName: Sender Name for mail to sender overwrites flexform settings (e.g. Sender Name)
				senderName =

				# cat=powermail_additional//0456; type=text; label= Sender overwrite SenderEmail: Sender Email for mail to sender overwrites flexform settings (e.g. sender@mail.com)
				senderEmail =

				# cat=powermail_additional//0458; type=text; label= Sender overwrite Mail Subject: Subject for mail to sender overwrites flexform settings (e.g. Thx for your mail)
				subject =

				# cat=powermail_additional//0460; type=text; label= Sender CC Email Addresses: Commaseparated list of cc mail receivers (e.g. rec2@mail.com, rec3@mail.com)
				cc =

				# cat=powermail_additional//0462; type=text; label= Sender BCC Email Addresses: Commaseparated list of bcc mail receivers (e.g. rec2@mail.com, rec3@mail.com)
				bcc =

				# cat=powermail_additional//0464; type=text; label= Sender Mail Return Path: Return Path for emails to sender (e.g. return@mail.com)
				returnPath =

				# cat=powermail_additional//0466; type=text; label= Sender Mail Reply Mail: Reply Email address for mail to sender (e.g. reply@mail.com)
				replyToEmail =

				# cat=powermail_additional//0468; type=text; label= Sender Mail Reply Name: Reply Name for mail to sender (e.g. Mr. Reply)
				replyToName =

				# cat=powermail_additional//0470; type=options[1,2,3,4,5]; label= Sender Mail Priority: Set mail priority for mail to sender (e.g. 3)
				priority = 3
			}
			senderHeader {
				# cat=powermail_additional//0060; type=text; label= Server-Mail: If set, the Mail-Header Sender is set (RFC 2822 - 3.6.2 Originator fields)
				email = 
				
				# cat=powermail_additional//0070; type=text; label= Server-Name: you can define a name along with the mail address (optional)
				name = 
			}
		}

		db {
			# cat=powermail_main/enable/0600; type=boolean; label= Mail Storage enabled: Store Mails in database
			enable = 1

			# cat=powermail_additional//0610; type=boolean; label= Hidden Mails in Storage: Add mails with hidden flag (e.g. 1)
			hidden = 0
		}

		marketing {
			# cat=powermail_additional//0700; type=boolean; label= Enable Google Conversion: Enable JavaScript for google conversion - This is interesting if you want to track every submit in your Google Adwords account for a complete conversion.
			enable = 0

			# cat=powermail_additional//0710; type=int+; label= Google Conversion Id: Add your google conversion id (see www.google.com/adwords for details)
			google_conversion_id = 1234567890

			# cat=powermail_additional//0720; type=text; label= Google Conversion Label: Add your google conversion label (see www.google.com/adwords for details)
			google_conversion_label = abcdefghijklmnopqrs

			# cat=powermail_additional//0730; type=text; label= Google Conversion Language: Add your google conversion language (see www.google.com/adwords for details)
			google_conversion_language = en
		}
		
		misc {
			# cat=powermail_additional//0800; type=boolean; label= Show only filled values: If the user submits a form, even not filled values are viewable. If you only want to show labels with filled values, use this setting
			showOnlyFilledValues = 1

			# cat=powermail_additional//0805; type=boolean; label= HTML without RemoveXSS: Per default HTML-Output is parsed through a RemoveXSS-Function to avoid Cross-Site-Scripting for security reasons. If you are aware of possible XSS-Problems, caused by editors, you can disable removeXSS and your original HTML is shown in the Frontend.
			disableRemoveXss = 0

			# cat=powermail_additional//0808; type=boolean; label= AJAX Submit Form: Submit Powermail Forms with AJAX (browser will not reload complete page)
			ajaxSubmit = 1

			# cat=powermail_additional//0810; type=text; label= Misc Upload Folder: Define the folder where files should be uploaded with upload fields (e.g. fileadmin/uploads/)
			uploadFolder = uploads/tx_powermail/

			# cat=powermail_additional//0820; type=int+; label= Misc Upload Filesize: Define the maximum filesize of file uploads in bytes (10485760 Byte -> 10 MB)
			uploadSize = 10485760

			# cat=powermail_additional//0830; type=text; label= Misc Upload Fileextensions: Define the allowed filetypes with their extensions for fileuploads and separate them with commas (e.g. jpg,jpeg,gif)
			uploadFileExtensions = jpg,jpeg,gif,png,tif,txt,doc,docx,xls,xlsx,ppt,pptx,pdf,flv,mpg,mpeg,avi,mp3,zip,rar,ace,csv

			# cat=powermail_additional//0840; type=boolean; label= Randomized Filenames: Uploaded filenames can be randomized to respect data privacy
			randomizeFileName = 0

			# cat=powermail_additional//0845; type=boolean; label= Force JavaScript Datepicker: Per default html5 Date or Datetime format is used. If you don't want to use it and want to have the same datepicker all over all browsers, you can enable this feature
			forceJavaScriptDatePicker = 0

			# cat=powermail_additional//0850; type=boolean; label= Debug Settings: Show all Settings from TypoScript, Flexform and Global Config in Devlog
			debugSettings = 0

			# cat=powermail_additional//0860; type=boolean; label= Debug Variables: Show all given Plugin variables from GET or POST in Devlog
			debugVariables = 0

			# cat=powermail_additional//0870; type=boolean; label= Debug Mails: Show all mail values in Devlog
			debugMail = 0

			# cat=powermail_additional//0880; type=boolean; label= Debug Save to Table: Show all values if you want to save powermail variables to another table in Devlog
			debugSaveToTable = 0

			# cat=powermail_additional//0890; type=boolean; label= Debug Spamshield: Show Spamshield Functions in Devlog
			debugSpamshield = 0
		}

		spamshield {
			# cat=powermail_spam//0900; type=boolean; label= SpamShield Active: En- or disable Spamshield for Powermail
			enable = 1

			# cat=powermail_spam//0910; type=int+; label= Spamshield Spamfactor in %: Set limit for spamfactor in powermail forms in % (e.g. 85)
			factor = 75

			# cat=powermail_spam//0920; type=text; label= Spamshield Notifymail: Admin can get an email if he/she wants to get informed if a mail failed. Let this field empty and no mail will be sent (e.g. admin@mail.com)
			email =

			# cat=powermail_spam//0930; type=text; label= Spamshield Notifymail Subject: Subject for notification Email to Admin
			emailSubject = Spam in powermail form recognized

			# cat=powermail_spam//0940; type=text; label= Spamshield Notifymail Template: Template for notification Email to Admin
			emailTemplate = EXT:powermail/Resources/Private/Templates/Mail/SpamNotification.html

			# cat=powermail_spam//0950; type=text; label= Spamshield Log Template Location: Path of log file, ie. typo3temp/logs/powermail_spam.log, if empty, logging is deactivated
			logfileLocation =

			# cat=powermail_spam//0960; type=text; label= Spamshield Log Template: Template for entries written to log file
			logTemplate = EXT:powermail/Resources/Private/Templates/Log/SpamNotification.html
		}

		captcha {
			# cat=powermail_spam//0930; type=text; label= Captcha Background: Set own captcha background image (e.g. fileadmin/bg.png)
			image = EXT:powermail/Resources/Private/Image/captcha_bg.png

			# cat=powermail_spam//0940; type=text; label= Captcha Font: Set TTF-Font for captcha image (e.g. fileadmin/font.ttf)
			font = EXT:powermail/Resources/Private/Fonts/ARCADE.TTF

			# cat=powermail_spam//0950; type=text; label= Captcha Text Color: Define your text color in hex code - must start with # (e.g. #ff0000)
			textColor = #444444

			# cat=powermail_spam//0960; type=int+; label= Captcha Text Size: Define your text size in px (e.g. 24)
			textSize = 32

			# cat=powermail_spam//0970; type=text; label= Captcha Text Angle: Define two different values (start and stop) for your text random angle and separate it with a comma (e.g. -10,10)
			textAngle = -5,5

			# cat=powermail_spam//0980; type=text; label= Captcha Text Distance Hor: Define two different values (start and stop) for your text horizontal random distance and separate it with a comma (e.g. 20,80)
			distanceHor = 20,80

			# cat=powermail_spam//0990; type=text; label= Captcha Text Distance Ver: Define two different values (start and stop) for your text vertical random distance and separate it with a comma (e.g. 30,60)
			distanceVer = 30,60
		}

		javascript {
			# cat=powermail_main//1000; type=boolean; label= Include jQuery From Google: Add jQuery JavaScript (will be loaded from ajax.googleapis.com)
			addJQueryFromGoogle = 0

			# cat=powermail_additional//1010; type=boolean; label= Include additional JavaScrpt: Add additional JavaScript and CSS Files (form validation, datepicker, etc...)
			addAdditionalJavaScript = 1

			# cat=powermail_additional//1020; type=text; label= jQuery Source: Change jQuery Source - per default it will be loaded from googleapis.com
			powermailJQuery = //ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
		}

	}
}
