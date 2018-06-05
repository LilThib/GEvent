namespace MyTestGmap
{
    partial class EventDetail
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

        #region Code généré par le Concepteur de composants

        /// <summary> 
        /// Méthode requise pour la prise en charge du concepteur - ne modifiez pas 
        /// le contenu de cette méthode avec l'éditeur de code.
        /// </summary>
        private void InitializeComponent()
        {
            this.lblName = new System.Windows.Forms.Label();
            this.lblDate = new System.Windows.Forms.Label();
            this.panel1 = new System.Windows.Forms.Panel();
            this.label3 = new System.Windows.Forms.Label();
            this.panel2 = new System.Windows.Forms.Panel();
            this.tbxDescription = new System.Windows.Forms.TextBox();
            this.lblPublicPrivate = new System.Windows.Forms.Label();
            this.rdbPublic = new System.Windows.Forms.RadioButton();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.rdbPrive = new System.Windows.Forms.RadioButton();
            this.lblEtat = new System.Windows.Forms.Label();
            this.pcbState = new System.Windows.Forms.PictureBox();
            this.flowLayoutPanel1 = new System.Windows.Forms.FlowLayoutPanel();
            this.panel3 = new System.Windows.Forms.Panel();
            this.btn_saveModif = new System.Windows.Forms.Button();
            this.panel2.SuspendLayout();
            this.groupBox1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pcbState)).BeginInit();
            this.flowLayoutPanel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // lblName
            // 
            this.lblName.Font = new System.Drawing.Font("Century Gothic", 15F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblName.Location = new System.Drawing.Point(24, 17);
            this.lblName.Name = "lblName";
            this.lblName.Size = new System.Drawing.Size(681, 34);
            this.lblName.TabIndex = 0;
            this.lblName.Text = "Name of the event";
            this.lblName.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            // 
            // lblDate
            // 
            this.lblDate.AutoSize = true;
            this.lblDate.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDate.Location = new System.Drawing.Point(30, 52);
            this.lblDate.Name = "lblDate";
            this.lblDate.Size = new System.Drawing.Size(41, 20);
            this.lblDate.TabIndex = 1;
            this.lblDate.Text = "date";
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(162)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.panel1.ForeColor = System.Drawing.Color.Black;
            this.panel1.Location = new System.Drawing.Point(-6, 90);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(767, 5);
            this.panel1.TabIndex = 2;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(15, 107);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(89, 20);
            this.label3.TabIndex = 3;
            this.label3.Text = "Description";
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(162)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.panel2.Controls.Add(this.flowLayoutPanel1);
            this.panel2.Location = new System.Drawing.Point(455, 94);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(5, 485);
            this.panel2.TabIndex = 4;
            // 
            // tbxDescription
            // 
            this.tbxDescription.Font = new System.Drawing.Font("Calibri", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.tbxDescription.Location = new System.Drawing.Point(111, 109);
            this.tbxDescription.Multiline = true;
            this.tbxDescription.Name = "tbxDescription";
            this.tbxDescription.Size = new System.Drawing.Size(320, 174);
            this.tbxDescription.TabIndex = 5;
            // 
            // lblPublicPrivate
            // 
            this.lblPublicPrivate.AutoSize = true;
            this.lblPublicPrivate.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblPublicPrivate.Location = new System.Drawing.Point(504, 315);
            this.lblPublicPrivate.Name = "lblPublicPrivate";
            this.lblPublicPrivate.Size = new System.Drawing.Size(182, 16);
            this.lblPublicPrivate.TabIndex = 6;
            this.lblPublicPrivate.Text = "Cet évènement est public";
            // 
            // rdbPublic
            // 
            this.rdbPublic.AutoSize = true;
            this.rdbPublic.Checked = true;
            this.rdbPublic.Location = new System.Drawing.Point(27, 37);
            this.rdbPublic.Name = "rdbPublic";
            this.rdbPublic.Size = new System.Drawing.Size(63, 20);
            this.rdbPublic.TabIndex = 7;
            this.rdbPublic.TabStop = true;
            this.rdbPublic.Text = "Public";
            this.rdbPublic.UseVisualStyleBackColor = true;
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.rdbPrive);
            this.groupBox1.Controls.Add(this.rdbPublic);
            this.groupBox1.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.groupBox1.Location = new System.Drawing.Point(111, 315);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(320, 76);
            this.groupBox1.TabIndex = 8;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Visibilité";
            // 
            // rdbPrive
            // 
            this.rdbPrive.AutoSize = true;
            this.rdbPrive.Location = new System.Drawing.Point(249, 37);
            this.rdbPrive.Name = "rdbPrive";
            this.rdbPrive.Size = new System.Drawing.Size(57, 20);
            this.rdbPrive.TabIndex = 8;
            this.rdbPrive.Text = "Privé";
            this.rdbPrive.UseVisualStyleBackColor = true;
            // 
            // lblEtat
            // 
            this.lblEtat.AutoSize = true;
            this.lblEtat.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblEtat.Location = new System.Drawing.Point(16, 524);
            this.lblEtat.Name = "lblEtat";
            this.lblEtat.Size = new System.Drawing.Size(136, 18);
            this.lblEtat.TabIndex = 9;
            this.lblEtat.Text = "État de l\'évènement";
            // 
            // pcbState
            // 
            this.pcbState.Image = global::MyTestGmap.Properties.Resources.icons8_horloge;
            this.pcbState.Location = new System.Drawing.Point(158, 515);
            this.pcbState.Name = "pcbState";
            this.pcbState.Size = new System.Drawing.Size(40, 40);
            this.pcbState.SizeMode = System.Windows.Forms.PictureBoxSizeMode.CenterImage;
            this.pcbState.TabIndex = 10;
            this.pcbState.TabStop = false;
            // 
            // flowLayoutPanel1
            // 
            this.flowLayoutPanel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(162)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.flowLayoutPanel1.Controls.Add(this.panel3);
            this.flowLayoutPanel1.Location = new System.Drawing.Point(3, 3);
            this.flowLayoutPanel1.Name = "flowLayoutPanel1";
            this.flowLayoutPanel1.Size = new System.Drawing.Size(272, 494);
            this.flowLayoutPanel1.TabIndex = 11;
            // 
            // panel3
            // 
            this.panel3.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel3.Location = new System.Drawing.Point(3, 3);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(263, 40);
            this.panel3.TabIndex = 0;
            // 
            // btn_saveModif
            // 
            this.btn_saveModif.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(252)))), ((int)(((byte)(171)))), ((int)(((byte)(16)))));
            this.btn_saveModif.BackgroundImageLayout = System.Windows.Forms.ImageLayout.None;
            this.btn_saveModif.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_saveModif.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_saveModif.ForeColor = System.Drawing.Color.White;
            this.btn_saveModif.Location = new System.Drawing.Point(288, 503);
            this.btn_saveModif.Name = "btn_saveModif";
            this.btn_saveModif.Size = new System.Drawing.Size(143, 60);
            this.btn_saveModif.TabIndex = 11;
            this.btn_saveModif.Text = "Sauvegarder les changements";
            this.btn_saveModif.UseVisualStyleBackColor = false;
            // 
            // EventDetail
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.Controls.Add(this.btn_saveModif);
            this.Controls.Add(this.pcbState);
            this.Controls.Add(this.lblEtat);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.lblPublicPrivate);
            this.Controls.Add(this.tbxDescription);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.lblDate);
            this.Controls.Add(this.lblName);
            this.Name = "EventDetail";
            this.Size = new System.Drawing.Size(730, 575);
            this.Load += new System.EventHandler(this.EventDetail_Load);
            this.panel2.ResumeLayout(false);
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pcbState)).EndInit();
            this.flowLayoutPanel1.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label lblName;
        private System.Windows.Forms.Label lblDate;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.TextBox tbxDescription;
        private System.Windows.Forms.Label lblPublicPrivate;
        private System.Windows.Forms.RadioButton rdbPublic;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.RadioButton rdbPrive;
        private System.Windows.Forms.Label lblEtat;
        private System.Windows.Forms.FlowLayoutPanel flowLayoutPanel1;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.PictureBox pcbState;
        private System.Windows.Forms.Button btn_saveModif;
    }
}
