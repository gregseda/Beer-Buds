tinymce.init({
	selector: "textarea.tinymce",
	
	/* Editor Theme*/
	theme: "modern",skin: "lightgray",
	/*Editor dimensions*/
	width: "100%", height: "300",
	/* Status Bar - ability to resize textarea  */
	statusbar: false,
	/* Plugins */
	plugins: [
			"advlist autolink image lists charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media",
			"save table contextmenu directionality emoticons template paste textcolor",
			"textcolor"],
	/* Toolbar */
	Toolbar: "insertfile undo redo | stylesheet | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
	/* styles */
	style_formats: [
		{title: "Headers", items:[
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"},
			{title: "Header 5", format: "h5"},
			{title: "Header 6", format: "h6"},
		]},
		{title: "Inline", items: [
			{title: "Bold", icon: "bold", format: "bold"},
			{title: "Italic", icon: "italic", format: "italic"},
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
			{title: "Code", icon: "code", format: "code"},
		]},
		{title: "Blocks", items: [
			{title: "Paragraphs", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"},
		]},
		{title: "Alignment", items: [
			{title: "Left", icon: "alighleft", format: "alighleft"},
			{title: "Center", icon: "aligncenter", format: "aligncenter"},
			{title: "Right", icon: "alignright", format: "alignright"},
			{title: "Justify", icon: "alignjustify", format: "alignjustify"},
		]}
		]
	
	});