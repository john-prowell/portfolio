const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;
const { BlockControls, AlignmentToolbar, InspectorControls } = wp.blockEditor;
const { PanelBody, TextControl } = wp.components;

registerBlockType('portfolio/current-year', {
  title: __('Current Year', 'portfolio'),
  icon: 'calendar-alt',
  category: 'widgets',
  attributes: {
    align: {
      type: 'string',
      default: 'left'
    },
    prefix: {
      type: 'string',
      default: '© '
    },
    suffix: {
      type: 'string',
      default: ''
    }
  },
  edit: ({ attributes, setAttributes }) => {
    const { align, prefix, suffix } = attributes;

    return wp.element.createElement(
      'div',
      {},
      // Alignment controls
      wp.element.createElement(
        BlockControls,
        {},
        wp.element.createElement(AlignmentToolbar, {
          value: align,
          onChange: (newAlign) => setAttributes({ align: newAlign || 'left' })
        })
      ),
      // Inspector (sidebar) controls for prefix/suffix
      wp.element.createElement(
        InspectorControls,
        {},
        wp.element.createElement(
          PanelBody,
          { title: __('Text Settings', 'portfolio'), initialOpen: true },
          wp.element.createElement(TextControl, {
            label: __('Prefix', 'portfolio'),
            value: prefix,
            onChange: (value) => setAttributes({ prefix: value })
          }),
          wp.element.createElement(TextControl, {
            label: __('Suffix', 'portfolio'),
            value: suffix,
            onChange: (value) => setAttributes({ suffix: value })
          })
        )
      ),
      // Preview in editor
      wp.element.createElement(
        'p',
        { style: { textAlign: align } },
        prefix + new Date().getFullYear() + (suffix ? ' ' + suffix : '')
      )
    );
  },
  save: () => null // PHP handles output
});
