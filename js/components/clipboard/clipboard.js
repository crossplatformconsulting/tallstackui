import ClipboardJS from 'clipboard/dist/clipboard';

export default (
    text = null,
    hash = null,
    type,
    placeholders,
) => ({
  text: text,
  notification: false,
  placeholders: placeholders,
  time: 2000,
  init() {
    this.$watch('notification', (value) => {
      if (!value || type === 'icon') {
        return;
      }

      // The approach taken here is to prevent different
      // buttons from receiving text changes when clicked.
      const ref = this.$refs[`${type}-${hash}`];

      ref.innerText = this.placeholders.copied;

      setTimeout(() => ref.innerText = this.placeholders.copy, this.time);
    });
  },
  copy() {
    // Using this.notification here to prevent
    // the recopy during the text effect.
    if (!text || !hash || this.notification) {
      return;
    }

    const clipboard = new ClipboardJS(`[data-hash="${hash}"]`, {
      text: () => this.text,
    });

    clipboard.on('success', (event) => {
      this.notification = true;

      event.clearSelection();

      setTimeout(() => this.notification = null, this.time);

      this.$el.dispatchEvent(new CustomEvent('copy', {detail: {text: this.text}}));

      clipboard.destroy();
    });

    clipboard.on('error', () => this.notification = false);
  },
});
