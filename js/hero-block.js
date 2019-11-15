( function(blocks, element) {
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
        source: 'children',
        selector: 'h1'
      },
      subTitle: {
        type: 'string',
        source: 'children',
        selector: 'p'
      }
    },
    example: {
      attributes: {
        title: 'Example title'
      }
    },
    edit: function(props) {
      let title = props.attributes.title,
          subTitle = props.attributes.subtitle

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


      return el('div', {
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
                value: title
              }),
              el('input',
                {
                  tagName: 'p',
                  className: 'input subtitle has-text-centered',
                  onChange: onChangeSubTitle,
                  value: subTitle
                }
              ),
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
                  el(
                    'a',
                    {
                      className: 'button is-link is-outlined'
                    },
                    'Call to action'
                  )
                )
              )
            ]})
          })
        })
    },
    save: function(props) {
      let title = props.attributes.title,
          subTitle = props.attributes.subtitle

      let string = el('div', {
        className: 'hero',
        children: el('div', {
          className: 'hero-body',
          children: el('div', {
            className: 'container',
            children: [
              el(
                'h1',
                {
                  tagName: 'h1',
                  className: 'title has-text-centered',
                  children: title
                }
              ),
              el(
                'p',
                {
                  tagName: 'p',
                  className: 'subtitle has-text-centered',
                  children: subTitle
                }
                ),
              el(
                'div', {
                  className: 'columns'
                },
                el(
                  'div', {
                    className: 'column has-text-centered is-full'
                  },
                  el(
                    'a', {
                      className: 'button is-link is-outlined'
                    },
                    'Call to action'
                  )
                )
              )
            ]
          })
        })
      })

      return string
    }
	})
}(
  window.wp.blocks,
  window.wp.element
))