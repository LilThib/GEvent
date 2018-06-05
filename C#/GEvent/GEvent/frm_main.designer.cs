namespace GEvent
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
            this.tbxLat = new System.Windows.Forms.TextBox();
            this.tbxLng = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.btnGo = new System.Windows.Forms.Button();
            this.splitter1 = new System.Windows.Forms.Splitter();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel2 = new System.Windows.Forms.Panel();
            this.btnOnWaitEvents = new System.Windows.Forms.Panel();
            this.lbl_btnOnWaitEvents = new System.Windows.Forms.Label();
            this.btnAllEvents = new System.Windows.Forms.Panel();
            this.lbl_btnAllEvents = new System.Windows.Forms.Label();
            this.pnl_EventsResume = new System.Windows.Forms.Panel();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.pcbClose = new System.Windows.Forms.PictureBox();
            this.panel1.SuspendLayout();
            this.panel2.SuspendLayout();
            this.btnOnWaitEvents.SuspendLayout();
            this.btnAllEvents.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbClose)).BeginInit();
            this.SuspendLayout();
            // 
            // MyMaps
            // 
            this.MyMaps.Bearing = 0F;
            this.MyMaps.CanDragMap = true;
            this.MyMaps.EmptyTileColor = System.Drawing.Color.Navy;
            this.MyMaps.GrayScaleMode = false;
            this.MyMaps.HelperLineOption = GMap.NET.WindowsForms.HelperLineOptions.DontShow;
            this.MyMaps.LevelsKeepInMemmory = 5;
            this.MyMaps.Location = new System.Drawing.Point(0, 40);
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
            this.MyMaps.Size = new System.Drawing.Size(730, 575);
            this.MyMaps.TabIndex = 2;
            this.MyMaps.Zoom = 3D;
            this.MyMaps.OnMarkerClick += new GMap.NET.WindowsForms.MarkerClick(this.MyMaps_OnMarkerClick);
            // 
            // tbxLat
            // 
            this.tbxLat.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.tbxLat.ForeColor = System.Drawing.Color.Black;
            this.tbxLat.Location = new System.Drawing.Point(868, 510);
            this.tbxLat.Name = "tbxLat";
            this.tbxLat.Size = new System.Drawing.Size(100, 20);
            this.tbxLat.TabIndex = 3;
            this.tbxLat.Text = "46.2";
            // 
            // tbxLng
            // 
            this.tbxLng.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.tbxLng.Location = new System.Drawing.Point(868, 552);
            this.tbxLng.Name = "tbxLng";
            this.tbxLng.Size = new System.Drawing.Size(100, 20);
            this.tbxLng.TabIndex = 4;
            this.tbxLng.Text = "6.1";
            // 
            // label1
            // 
            this.label1.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(856, 494);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(45, 13);
            this.label1.TabIndex = 5;
            this.label1.Text = "Latitude";
            // 
            // label2
            // 
            this.label2.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(856, 536);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(54, 13);
            this.label2.TabIndex = 6;
            this.label2.Text = "Longitude";
            // 
            // btnGo
            // 
            this.btnGo.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.btnGo.Location = new System.Drawing.Point(880, 583);
            this.btnGo.Name = "btnGo";
            this.btnGo.Size = new System.Drawing.Size(75, 23);
            this.btnGo.TabIndex = 7;
            this.btnGo.Text = "Go !";
            this.btnGo.UseVisualStyleBackColor = true;
            this.btnGo.Click += new System.EventHandler(this.btnGo_Click);
            // 
            // splitter1
            // 
            this.splitter1.Location = new System.Drawing.Point(0, 0);
            this.splitter1.Name = "splitter1";
            this.splitter1.Size = new System.Drawing.Size(730, 615);
            this.splitter1.TabIndex = 1;
            this.splitter1.TabStop = false;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(42)))), ((int)(((byte)(54)))));
            this.panel1.Controls.Add(this.panel2);
            this.panel1.Controls.Add(this.pictureBox1);
            this.panel1.Controls.Add(this.pcbClose);
            this.panel1.Location = new System.Drawing.Point(0, -1);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(1090, 42);
            this.panel1.TabIndex = 8;
            // 
            // panel2
            // 
            this.panel2.Controls.Add(this.btnOnWaitEvents);
            this.panel2.Controls.Add(this.btnAllEvents);
            this.panel2.Location = new System.Drawing.Point(128, 2);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(602, 39);
            this.panel2.TabIndex = 12;
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
            // pnl_EventsResume
            // 
            this.pnl_EventsResume.BackColor = System.Drawing.Color.White;
            this.pnl_EventsResume.Location = new System.Drawing.Point(730, 40);
            this.pnl_EventsResume.Name = "pnl_EventsResume";
            this.pnl_EventsResume.Size = new System.Drawing.Size(360, 450);
            this.pnl_EventsResume.TabIndex = 9;
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = global::MyTestGmap.Properties.Resources.logo_gevent_inlin_white;
            this.pictureBox1.Location = new System.Drawing.Point(-3, -4);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(125, 53);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.pictureBox1.TabIndex = 9;
            this.pictureBox1.TabStop = false;
            // 
            // pcbClose
            // 
            this.pcbClose.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(162)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.pcbClose.Image = global::MyTestGmap.Properties.Resources.icons8_crossbar;
            this.pcbClose.Location = new System.Drawing.Point(1059, 11);
            this.pcbClose.Name = "pcbClose";
            this.pcbClose.Size = new System.Drawing.Size(20, 20);
            this.pcbClose.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pcbClose.TabIndex = 1;
            this.pcbClose.TabStop = false;
            this.pcbClose.Click += new System.EventHandler(this.pcbClose_Click);
            // 
            // frm_main
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(197)))), ((int)(((byte)(193)))));
            this.ClientSize = new System.Drawing.Size(1090, 615);
            this.Controls.Add(this.pnl_EventsResume);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.btnGo);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.tbxLng);
            this.Controls.Add(this.tbxLat);
            this.Controls.Add(this.MyMaps);
            this.Controls.Add(this.splitter1);
            this.ForeColor = System.Drawing.SystemColors.ControlText;
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.MinimumSize = new System.Drawing.Size(600, 500);
            this.Name = "frm_main";
            this.SizeGripStyle = System.Windows.Forms.SizeGripStyle.Show;
            this.Text = "MyMaps";
            this.Load += new System.EventHandler(this.fmMain_Load);
            this.panel1.ResumeLayout(false);
            this.panel2.ResumeLayout(false);
            this.btnOnWaitEvents.ResumeLayout(false);
            this.btnAllEvents.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbClose)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private GMap.NET.WindowsForms.GMapControl MyMaps;
        private System.Windows.Forms.TextBox tbxLat;
        private System.Windows.Forms.TextBox tbxLng;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Button btnGo;
        private System.Windows.Forms.Splitter splitter1;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.PictureBox pcbClose;
        private System.Windows.Forms.Panel btnOnWaitEvents;
        private System.Windows.Forms.Label lbl_btnOnWaitEvents;
        private System.Windows.Forms.Panel btnAllEvents;
        private System.Windows.Forms.Label lbl_btnAllEvents;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Panel pnl_EventsResume;
    }
}

