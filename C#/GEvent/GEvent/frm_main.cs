using GMap.NET.MapProviders;
using System;
using System.Windows.Forms;
using GMap.NET.WindowsForms;
using GMap.NET.WindowsForms.Markers;
using GMap.NET;
using System.Drawing;

namespace MyTestGmap
{
    public partial class frm_main : Form
    {
        frm_login Login = new frm_login();
        ModelEvent myModelEvent = new ModelEvent();

        public frm_main()
        {
            InitializeComponent();
            Login.ShowDialog();
            DisplayEvents();
        }

        private void fmMain_Load(object sender, EventArgs e)
        {
            MyMaps.MapProvider = GMapProviders.GoogleMap;
            MyMaps.ShowCenter = false;
            MyMaps.DragButton = MouseButtons.Left;
            MyMaps.Zoom = 3;
        }

        int cpt = 0;
        private void DisplayEvents()
        {
            myModelEvent.GetEvents();
            pnl_EventsResume.Controls.Clear();

            // Create a overlay
            GMapOverlay markers = new GMapOverlay("markers");

            // Affiche les amis de 
            foreach (Event e in myModelEvent.Events_list)
            {
                cpt++;

                EventResume eventResume = new EventResume(e)
                {
                    Name = "EventResume" + cpt.ToString(),
                    Parent = pnl_EventsResume,
                    Dock = DockStyle.Top
                };
                foreach (Control c in eventResume.Controls)
                {
                    c.Click += EventResume_Click;
                }
                pnl_EventsResume.Controls.Add(eventResume);

                PointLatLng point = new PointLatLng(e.Lat, e.Lng);
                GMapMarker marker = new GMarkerGoogle(point, GMarkerGoogleType.red_dot)
                {
                    Tag = e.Name
                };
                // Add marker on overlay
                markers.Markers.Add(marker);
            }

            // Cover map whith overlay
            MyMaps.Overlays.Add(markers);
        }

        private void EventResume_Click(object sender, EventArgs e)
        {
            EventResume template;
            if (sender.GetType() == typeof(EventResume))
            {
                template = (EventResume)sender;
            }
            else
            {
                template = (EventResume)((Control)sender).Parent;
            }

            PointLatLng point = new PointLatLng(template.MyEvent.Lat, template.MyEvent.Lng);
            MyMaps.Position = point;
        }

        private void btnGo_Click(object sender, EventArgs e)
        {
            double lat = Convert.ToDouble(tbxLat.Text);
            double lng = Convert.ToDouble(tbxLng.Text);
            PointLatLng point = new PointLatLng(lat, lng);
            GMapMarker marker = new GMarkerGoogle(point, GMarkerGoogleType.red_dot)
            {
                Tag = "dsa"
            };
            Console.WriteLine(marker.Tag);
            MyMaps.Position = point;
            MyMaps.Zoom = 12;

            // Create a overlay
            GMapOverlay markers = new GMapOverlay("markers");

            // Add marker on overlay
            markers.Markers.Add(marker);

            
        }

        private void MyMaps_OnMarkerClick(GMapMarker item, MouseEventArgs e)
        {
            
        }

        private void pcbClose_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void btnOnWaitEvents_Click(object sender, EventArgs e)
        {

        }

        private void btnAllEvents_Click(object sender, EventArgs e)
        {

        }

        private void lbl_btnAllEvents_MouseHover(object sender, EventArgs e)
        {
            lbl_btnAllEvents.ForeColor = Color.FromArgb(232,217,53);
        }

        private void lbl_btnOnWaitEvents_MouseHover(object sender, EventArgs e)
        {
            lbl_btnOnWaitEvents.ForeColor = Color.FromArgb(252, 171, 16);
        }

        private void Labels_navbar_MouseLeave(object sender, EventArgs e)
        {
            lbl_btnAllEvents.ForeColor = Color.White;
            lbl_btnOnWaitEvents.ForeColor = Color.White;
        }
    }
}
