using System;
using System.Windows.Forms;

namespace MyTestGmap
{
    partial class EventResume : UserControl
    {
        private Event _myEvent;

        public Event MyEvent
        {
            get { return _myEvent; }
            set { _myEvent = value; }
        }

        public EventResume(Event pEvent)
        {
            InitializeComponent();
            this.lblDate.Text = pEvent.Adress;
            this.lblNom.Text = pEvent.Name;
            this.MyEvent = pEvent;
        }

        private void pcbMore_Click(object sender, EventArgs e)
        {
            
        }

        private void FocusOnThePin(object sender, EventArgs e)
        {
            
        }
    }
}
