namespace MyTestGmap
{
    partial class frm_main
    {
        /// <summary>
        /// Variable nécessaire au concepteur.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Nettoyage des ressources utilisées.
        /// </summary>
        /// <param name="disposing">true si les ressources managées doivent être supprimées ; sinon, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Code généré par le Concepteur Windows Form

        /// <summary>
        /// Méthode requise pour la prise en charge du concepteur - ne modifiez pas
        /// le contenu de cette méthode avec l'éditeur de code.
        /// </summary>
        private void InitializeComponent()
        {
            this.MyMaps = new GMap.NET.WindowsForms.GMapControl();
            this.pnl_header = new System.Windows.Forms.Panel();
            this.pnl_nav = new System.Windows.Forms.Panel();
            this.btnOnWaitEvents = new System.Windows.Forms.Panel();
            this.lbl_btnOnWaitEvents = new System.Windows.Forms.Label();
            this.btnAllEvents = new System.Windows.Forms.Panel();
            this.lbl_btnAllEvents = new System.Windows.Forms.Label();
            this.pcb_logo = new System.Windows.Forms.PictureBox();
            this.pcbClose = new System.Windows.Forms.PictureBox();
            this.pnl_EventsResume = new System.Windows.Forms.Panel();
            this.lbl_AllEvent = new System.Windows.Forms.Label();
            this.pnl_EventDetails = new System.Windows.Forms.Panel();
            this.pnl_header.SuspendLayout();
            this.pnl_nav.SuspendLayout();
            this.btnOnWaitEvents.SuspendLayout();
            this.btnAllEvents.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pcb_logo)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbClose)).BeginInit();
            this.pnl_EventDetails.SuspendLayout();
            this.SuspendLayout();
            // 
            // MyMaps
            // 
            this.MyMaps.Bearing = 0F;
            this.MyMaps.CanDragMap = true;
            this.MyMaps.Dock = System.Windows.Forms.DockStyle.Fill;
            this.MyMaps.EmptyTileColor = System.Drawing.Color.Navy;
            this.MyMaps.GrayScaleMode = false;
            this.MyMaps.HelperLineOption = GMap.NET.WindowsForms.HelperLineOptions.DontShow;
            this.MyMaps.LevelsKeepInMemmory = 5;
            this.MyMaps.Location = new System.Drawing.Point(0, 0);
            this.MyMaps.MarkersEnabled = true;
            this.MyMaps.MaxZoom = 20;
            this.MyMaps.MinZoom = 3;
            this.MyMaps.MouseWheelZoomEnabled = true;
            this.MyMaps.MouseWheelZoomType = GMap.NET.MouseWheelZoomType.MousePositionWithoutCenter;
            this.MyMaps.Name = "MyMaps";
            this.MyMaps.NegativeMode = false;
            this.MyMaps.PolygonsEnabled = true;
            this.MyMaps.RetryLoadTile = 0;
            this.MyMaps.RoutesEnabled = true;
            this.MyMaps.ScaleMode = GMap.NET.WindowsForms.ScaleModes.Integer;
            this.MyMaps.SelectedAreaFillColor = System.Drawing.Color.FromArgb(((int)(((byte)(33)))), ((int)(((byte)(65)))), ((int)(((byte)(105)))), ((int)(((byte)(225)))));
            this.MyMaps.ShowTileGridLines = false;
            this.MyMaps.Size = new System.Drawing.Size(730, 573);
            this.MyMaps.TabIndex = 2;
            this.MyMaps.Zoom = 3D;
            this.MyMaps.OnMarkerClick += new GMap.NET.WindowsForms.MarkerClick(this.MyMaps_OnMarkerClick);
            // 
            // pnl_header
            // 
            this.pnl_header.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(42)))), ((int)(((byte)(54)))));
            this.pnl_header.Controls.Add(this.pnl_nav);
            this.pnl_header.Controls.Add(this.pcb_logo);
            this.pnl_header.Controls.Add(this.pcbClose);
            this.pnl_header.Location = new System.Drawing.Point(0, 0);
            this.pnl_header.Name = "pnl_header";
            this.pnl_header.Size = new System.Drawing.Size(1137, 41);
            this.pnl_header.TabIndex = 8;
            // 
            // pnl_nav
            // 
            this.pnl_nav.Controls.Add(this.btnOnWaitEvents);
            this.pnl_nav.Controls.Add(this.btnAllEvents);
            this.pnl_nav.Location = new System.Drawing.Point(128, 2);
            this.pnl_nav.Name = "pnl_nav";
            this.pnl_nav.Size = new System.Drawing.Size(602, 39);
            this.pnl_nav.TabIndex = 12;
            // 
            // btnOnWaitEvents
            // 
            this.btnOnWaitEvents.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.btnOnWaitEvents.Controls.Add(this.lbl_btnOnWaitEvents);
            this.btnOnWaitEvents.Dock = System.Windows.Forms.DockStyle.Left;
            this.btnOnWaitEvents.Location = new System.Drawing.Point(170, 0);
            this.btnOnWaitEvents.Name = "btnOnWaitEvents";
            this.btnOnWaitEvents.Size = new System.Drawing.Size(170, 39);
            this.btnOnWaitEvents.TabIndex = 11;
            this.btnOnWaitEvents.Click += new System.EventHandler(this.btnOnWaitEvents_Click);
            this.btnOnWaitEvents.MouseLeave += new System.EventHandler(this.Labels_navbar_MouseLeave);
            this.btnOnWaitEvents.MouseHover += new System.EventHandler(this.lbl_btnOnWaitEvents_MouseHover);
            // 
            // lbl_btnOnWaitEvents
            // 
            this.lbl_btnOnWaitEvents.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_btnOnWaitEvents.ForeColor = System.Drawing.Color.White;
            this.lbl_btnOnWaitEvents.Location = new System.Drawing.Point(14, 3);
            this.lbl_btnOnWaitEvents.Name = "lbl_btnOnWaitEvents";
            this.lbl_btnOnWaitEvents.Size = new System.Drawing.Size(140, 33);
            this.lbl_btnOnWaitEvents.TabIndex = 0;
            this.lbl_btnOnWaitEvents.Text = "Évenements en attente";
            this.lbl_btnOnWaitEvents.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.lbl_btnOnWaitEvents.Click += new System.EventHandler(this.btnOnWaitEvents_Click);
            this.lbl_btnOnWaitEvents.MouseLeave += new System.EventHandler(this.Labels_navbar_MouseLeave);
            this.lbl_btnOnWaitEvents.MouseHover += new System.EventHandler(this.lbl_btnOnWaitEvents_MouseHover);
            // 
            // btnAllEvents
            // 
            this.btnAllEvents.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.btnAllEvents.Controls.Add(this.lbl_btnAllEvents);
            this.btnAllEvents.Dock = System.Windows.Forms.DockStyle.Left;
            this.btnAllEvents.Location = new System.Drawing.Point(0, 0);
            this.btnAllEvents.Name = "btnAllEvents";
            this.btnAllEvents.Size = new System.Drawing.Size(170, 39);
            this.btnAllEvents.TabIndex = 10;
            this.btnAllEvents.Click += new System.EventHandler(this.btnAllEvents_Click);
            this.btnAllEvents.MouseLeave += new System.EventHandler(this.Labels_navbar_MouseLeave);
            this.btnAllEvents.MouseHover += new System.EventHandler(this.lbl_btnAllEvents_MouseHover);
            // 
            // lbl_btnAllEvents
            // 
            this.lbl_btnAllEvents.Font = new System.Drawing.Font("Century Gothic", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_btnAllEvents.ForeColor = System.Drawing.Color.White;
            this.lbl_btnAllEvents.Location = new System.Drawing.Point(14, 3);
            this.lbl_btnAllEvents.Name = "lbl_btnAllEvents";
            this.lbl_btnAllEvents.Size = new System.Drawing.Size(140, 33);
            this.lbl_btnAllEvents.TabIndex = 0;
            this.lbl_btnAllEvents.Text = "Tous les évenements";
            this.lbl_btnAllEvents.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.lbl_btnAllEvents.Click += new System.EventHandler(this.btnAllEvents_Click);
            this.lbl_btnAllEvents.MouseLeave += new System.EventHandler(this.Labels_navbar_MouseLeave);
            this.lbl_btnAllEvents.MouseHover += new System.EventHandler(this.lbl_btnAllEvents_MouseHover);
            // 
            // pcb_logo
            // 
            this.pcb_logo.Image = global::MyTestGmap.Properties.Resources.logo_gevent_inlin_white;
            this.pcb_logo.Location = new System.Drawing.Point(-3, -4);
            this.pcb_logo.Name = "pcb_logo";
            this.pcb_logo.Size = new System.Drawing.Size(125, 53);
            this.pcb_logo.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.pcb_logo.TabIndex = 9;
            this.pcb_logo.TabStop = false;
            // 
            // pcbClose
            // 
            this.pcbClose.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(162)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.pcbClose.Image = global::MyTestGmap.Properties.Resources.icons8_crossbar;
            this.pcbClose.Location = new System.Drawing.Point(1108, 10);
            this.pcbClose.Name = "pcbClose";
            this.pcbClose.Size = new System.Drawing.Size(20, 20);
            this.pcbClose.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pcbClose.TabIndex = 1;
            this.pcbClose.TabStop = false;
            this.pcbClose.Click += new System.EventHandler(this.pcbClose_Click);
            // 
            // pnl_EventsResume
            // 
            this.pnl_EventsResume.AutoScroll = true;
            this.pnl_EventsResume.BackColor = System.Drawing.Color.White;
            this.pnl_EventsResume.Location = new System.Drawing.Point(730, 89);
            this.pnl_EventsResume.Name = "pnl_EventsResume";
            this.pnl_EventsResume.Size = new System.Drawing.Size(407, 526);
            this.pnl_EventsResume.TabIndex = 9;
            // 
            // lbl_AllEvent
            // 
            this.lbl_AllEvent.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(197)))), ((int)(((byte)(193)))));
            this.lbl_AllEvent.Font = new System.Drawing.Font("Century Gothic", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl_AllEvent.ForeColor = System.Drawing.Color.White;
            this.lbl_AllEvent.Location = new System.Drawing.Point(730, 42);
            this.lbl_AllEvent.Name = "lbl_AllEvent";
            this.lbl_AllEvent.Size = new System.Drawing.Size(407, 44);
            this.lbl_AllEvent.TabIndex = 0;
            this.lbl_AllEvent.Text = "Tous les évènements (6)";
            this.lbl_AllEvent.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // pnl_EventDetails
            // 
            this.pnl_EventDetails.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(224)))), ((int)(((byte)(224)))), ((int)(((byte)(224)))));
            this.pnl_EventDetails.Controls.Add(this.MyMaps);
            this.pnl_EventDetails.ForeColor = System.Drawing.Color.Black;
            this.pnl_EventDetails.Location = new System.Drawing.Point(0, 42);
            this.pnl_EventDetails.Name = "pnl_EventDetails";
            this.pnl_EventDetails.Size = new System.Drawing.Size(730, 573);
            this.pnl_EventDetails.TabIndex = 10;
            // 
            // frm_main
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(197)))), ((int)(((byte)(193)))));
            this.ClientSize = new System.Drawing.Size(1137, 615);
            this.Controls.Add(this.pnl_EventDetails);
            this.Controls.Add(this.lbl_AllEvent);
            this.Controls.Add(this.pnl_EventsResume);
            this.Controls.Add(this.pnl_header);
            this.ForeColor = System.Drawing.SystemColors.ControlText;
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.MinimumSize = new System.Drawing.Size(600, 500);
            this.Name = "frm_main";
            this.SizeGripStyle = System.Windows.Forms.SizeGripStyle.Hide;
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "MyMaps";
            this.Load += new System.EventHandler(this.fmMain_Load);
            this.pnl_header.ResumeLayout(false);
            this.pnl_nav.ResumeLayout(false);
            this.btnOnWaitEvents.ResumeLayout(false);
            this.btnAllEvents.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.pcb_logo)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbClose)).EndInit();
            this.pnl_EventDetails.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion
        private GMap.NET.WindowsForms.GMapControl MyMaps;
        private System.Windows.Forms.Panel pnl_header;
        private System.Windows.Forms.PictureBox pcb_logo;
        private System.Windows.Forms.PictureBox pcbClose;
        private System.Windows.Forms.Panel btnOnWaitEvents;
        private System.Windows.Forms.Label lbl_btnOnWaitEvents;
        private System.Windows.Forms.Panel btnAllEvents;
        private System.Windows.Forms.Label lbl_btnAllEvents;
        private System.Windows.Forms.Panel pnl_nav;
        private System.Windows.Forms.Panel pnl_EventsResume;
        private System.Windows.Forms.Label lbl_AllEvent;
        private System.Windows.Forms.Panel pnl_EventDetails;
    }
}

