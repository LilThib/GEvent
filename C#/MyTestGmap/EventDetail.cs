using System;
using System.Windows.Forms;

namespace MyTestGmap
{
    public partial class EventDetail : UserControl
    {
        public EventDetail(Event e)
        {
            InitializeComponent();
            lblName.Text = e.Name;
            lblDate.Text = e.Date.ToShortDateString();
            tbxDescription.Text = e.Description;
            if (e.Private)
            {
                rdbPrive.Checked = true;
            }
            pcbState.Image = Properties.Resources.icons8_crossbar;
            switch (e.State)
            {
                case Event.ValidationState.validate:
                    pcbState.Image = Properties.Resources.icons8_checkmark_filled_50;
                    break;
                case Event.ValidationState.refused:
                    pcbState.Image = Properties.Resources.icons8_delete_filled_50;
                    break;
                default:
                    pcbState.Image = Properties.Resources.icons8_delete_filled_50;
                    break;
            }
        }

        private void EventDetail_Load(object sender, EventArgs e)
        {

        }
    }
}
