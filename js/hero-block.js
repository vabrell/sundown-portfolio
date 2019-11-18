;(function(blocks, element) {
  let el = element.createElement,
    titleStyle = {
      color: 'rgb(206, 65, 65)'
    }

  blocks.registerBlockType('sundown/hero-block', {
    title: 'Hero',
    icon: 'format-image',
    category: 'layout',
    attributes: {
      title: {
        type: 'string',
        source: 'html',
        selector: 'h1'
      },
      subTitle: {
        type: 'string',
        source: 'html',
        selector: 'p'
      },
      actionText: {
        type: 'string',
        source: 'html',
        selector: 'a'
      },
      actionLink: {
        type: 'string',
        source: 'attribute',
        selector: 'a',
        attribute: 'href'
      }
    },
    edit: function(props) {
      let title = props.attributes.title,
        subTitle = props.attributes.subTitle
      btnText = props.attributes.actionText
      btnLink = props.attributes.actionLink

      function onChangeTitle(newTitle) {
        props.setAttributes({
          title: newTitle.target.value
        })
      }

      function onChangeSubTitle(newSubTitle) {
        props.setAttributes({
          subTitle: newSubTitle.target.value
        })
      }

      function onChangeText(newText) {
        props.setAttributes({
          actionText: newText.target.value
        })
      }

      function onChangeLink(newLink) {
        props.setAttributes({
          actionLink: newLink.target.value
        })
      }

      return el('section', {
        className: 'hero',
        children: el('div', {
          className: 'hero-body',
          children: el('div', {
            className: 'container',
            children: [
              el('input', {
                tagName: 'h1',
                style: titleStyle,
                className: 'input title has-text-centered',
                onChange: onChangeTitle,
                value: title,
                placeholder: local.title
              }),
              el('input', {
                tagName: 'p',
                className: 'input subtitle has-text-centered',
                onChange: onChangeSubTitle,
                value: subTitle,
                placeholder: local.subTitle
              }),
              el(
                'div',
                {
                  className: 'columns is-multiline'
                },
                [
                  el(
                    'div',
                    {
                      className: 'column has-text-centered is-full'
                    },
                    el('input', {
                      tagName: 'a',
                      className: 'button is-link is-outlined',
                      value: btnText,
                      onChange: onChangeText,
                      placeholder: local.btnText
                    })
                  ),
                  el(
                    'div',
                    {
                      className: 'column has-text-centered is-full'
                    },
                    el('input', {
                      tagName: 'a',
                      value: btnLink,
                      onChange: onChangeLink,
                      placeholder: local.btnLink
                    })
                  )
                ]
              )
            ]
          })
        })
      })
    },
    save: function(props) {
      return el('section', {
        className: 'hero',
        children: el('div', {
          className: 'hero-body',
          children: el('div', {
            className: 'container',
            children: [
              el('h1', {
                tagName: 'h1',
                className: 'title has-text-centered',
                children: props.attributes.title
              }),
              el('p', {
                tagName: 'p',
                className: 'subtitle has-text-centered',
                children: props.attributes.subTitle
              }),
              el(
                'div',
                {
                  className: 'columns'
                },
                el(
                  'div',
                  {
                    className: 'column has-text-centered is-full'
                  },
                  el('a', {
                    tagName: 'a',
                    className: 'button is-link is-outlined',
                    children: props.attributes.actionText,
                    href: props.attributes.actionLink
                  })
                )
              )
            ]
          })
        })
      })
    }
  })
})(window.wp.blocks, window.wp.element)
