namespace MyTestGmap
{
    partial class EventResume
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
            this.lblNom = new System.Windows.Forms.Label();
            this.lblDate = new System.Windows.Forms.Label();
            this.pcbMore = new System.Windows.Forms.PictureBox();
            this.pcbValidate = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.pcbMore)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbValidate)).BeginInit();
            this.SuspendLayout();
            // 
            // lblNom
            // 
            this.lblNom.AutoSize = true;
            this.lblNom.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNom.Location = new System.Drawing.Point(6, 5);
            this.lblNom.Name = "lblNom";
            this.lblNom.Size = new System.Drawing.Size(121, 20);
            this.lblNom.TabIndex = 1;
            this.lblNom.Text = "Nom de l\'event";
            // 
            // lblDate
            // 
            this.lblDate.AutoSize = true;
            this.lblDate.Font = new System.Drawing.Font("Century Gothic", 9F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDate.Location = new System.Drawing.Point(23, 28);
            this.lblDate.Name = "lblDate";
            this.lblDate.Size = new System.Drawing.Size(101, 17);
            this.lblDate.TabIndex = 4;
            this.lblDate.Text = "Date de l\'event";
            // 
            // pcbMore
            // 
            this.pcbMore.Image = global::MyTestGmap.Properties.Resources.icons8_more;
            this.pcbMore.InitialImage = global::MyTestGmap.Properties.Resources.icons8_more;
            this.pcbMore.Location = new System.Drawing.Point(354, 15);
            this.pcbMore.Name = "pcbMore";
            this.pcbMore.Size = new System.Drawing.Size(30, 30);
            this.pcbMore.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pcbMore.TabIndex = 3;
            this.pcbMore.TabStop = false;
            this.pcbMore.Click += new System.EventHandler(this.pcbMore_Click);
            // 
            // pcbValidate
            // 
            this.pcbValidate.Image = global::MyTestGmap.Properties.Resources.icons8_horloge;
            this.pcbValidate.Location = new System.Drawing.Point(313, 5);
            this.pcbValidate.Name = "pcbValidate";
            this.pcbValidate.Size = new System.Drawing.Size(40, 40);
            this.pcbValidate.SizeMode = System.Windows.Forms.PictureBoxSizeMode.CenterImage;
            this.pcbValidate.TabIndex = 2;
            this.pcbValidate.TabStop = false;
            // 
            // EventResume
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.Controls.Add(this.lblDate);
            this.Controls.Add(this.pcbMore);
            this.Controls.Add(this.pcbValidate);
            this.Controls.Add(this.lblNom);
            this.Name = "EventResume";
            this.Size = new System.Drawing.Size(388, 48);
            this.Click += new System.EventHandler(this.FocusOnThePin);
            ((System.ComponentModel.ISupportInitialize)(this.pcbMore)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbValidate)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Label lblNom;
        private System.Windows.Forms.PictureBox pcbValidate;
        private System.Windows.Forms.PictureBox pcbMore;
        private System.Windows.Forms.Label lblDate;
    }
}
