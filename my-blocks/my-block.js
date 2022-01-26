wp.blocks.registerBlockType('shams/border-box', {
    title: 'New Cool Border Box',
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: {type: 'string'},
        color: { type: 'string'}
    },
    edit: function(props){
        function updateContent(e){
            props.setAttributes({
                content: e.target.value
            })
        }
        function updateColor(value){
            props.setAttributes({
                color: value.hex
            })
        }
        return React.createElement(
            "div", 
            null, /*#__PURE__*/
            React.createElement(
                "h2", 
                null, 
                "Nice Cool Border Box"), /*#__PURE__*/
                React.createElement(
                    "input", {
                        type: "text",
                        value: props.attributes.content,
                        onChange: updateContent
}), /*#__PURE__*/React.createElement(wp.components.ColorPicker, {
  color: props.attributes.color,
  onChangeComplete: updateColor
}));
    },
    save: function(props){
        return React.createElement("h3", {
  style: {
    border: `3px solid ${props.attributes.color}`
  }
}, props.attributes.content);
    }
})