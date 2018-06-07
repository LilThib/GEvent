namespace MyTestGmap
{
    partial class frm_login
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnLogin = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.tbxPseudo = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.tbxMDP = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.pcbClose = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbClose)).BeginInit();
            this.SuspendLayout();
            // 
            // btnLogin
            // 
            this.btnLogin.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(252)))), ((int)(((byte)(171)))), ((int)(((byte)(16)))));
            this.btnLogin.BackgroundImageLayout = System.Windows.Forms.ImageLayout.None;
            this.btnLogin.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnLogin.Font = new System.Drawing.Font("Century Gothic", 11.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnLogin.ForeColor = System.Drawing.Color.White;
            this.btnLogin.Location = new System.Drawing.Point(126, 346);
            this.btnLogin.Name = "btnLogin";
            this.btnLogin.Size = new System.Drawing.Size(111, 40);
            this.btnLogin.TabIndex = 1;
            this.btnLogin.Text = "Connexion";
            this.btnLogin.UseVisualStyleBackColor = false;
            this.btnLogin.Click += new System.EventHandler(this.btnLogin_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Century Gothic", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(60, 162);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(265, 36);
            this.label1.TabIndex = 2;
            this.label1.Text = "Connectez-vous !";
            // 
            // tbxPseudo
            // 
            this.tbxPseudo.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(42)))), ((int)(((byte)(54)))));
            this.tbxPseudo.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.tbxPseudo.Location = new System.Drawing.Point(101, 234);
            this.tbxPseudo.Name = "tbxPseudo";
            this.tbxPseudo.Size = new System.Drawing.Size(164, 20);
            this.tbxPseudo.TabIndex = 3;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Century Gothic", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.DarkGray;
            this.label2.Location = new System.Drawing.Point(91, 216);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(48, 16);
            this.label2.TabIndex = 5;
            this.label2.Text = "Pseudo";
            // 
            // tbxMDP
            // 
            this.tbxMDP.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(42)))), ((int)(((byte)(54)))));
            this.tbxMDP.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.tbxMDP.Location = new System.Drawing.Point(101, 295);
            this.tbxMDP.Name = "tbxMDP";
            this.tbxMDP.Size = new System.Drawing.Size(164, 20);
            this.tbxMDP.TabIndex = 6;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Century Gothic", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.Color.DarkGray;
            this.label3.Location = new System.Drawing.Point(91, 277);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(82, 16);
            this.label3.TabIndex = 7;
            this.label3.Text = "Mot de passe";
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = global::MyTestGmap.Properties.Resources.logo_gevent_white_full;
            this.pictureBox1.Location = new System.Drawing.Point(115, -4);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(150, 150);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 8;
            this.pictureBox1.TabStop = false;
            // 
            // pcbClose
            // 
            this.pcbClose.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(162)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.pcbClose.Image = global::MyTestGmap.Properties.Resources.icons8_crossbar;
            this.pcbClose.Location = new System.Drawing.Point(329, 6);
            this.pcbClose.Name = "pcbClose";
            this.pcbClose.Size = new System.Drawing.Size(26, 26);
            this.pcbClose.TabIndex = 0;
            this.pcbClose.TabStop = false;
            this.pcbClose.Click += new System.EventHandler(this.pcbClose_Click);
            // 
            // frm_login
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(42)))), ((int)(((byte)(54)))));
            this.ClientSize = new System.Drawing.Size(360, 435);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.tbxMDP);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.tbxPseudo);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnLogin);
            this.Controls.Add(this.pcbClose);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "frm_login";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Login";
            this.Load += new System.EventHandler(this.frm_login_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pcbClose)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.PictureBox pcbClose;
        private System.Windows.Forms.Button btnLogin;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox tbxPseudo;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox tbxMDP;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.PictureBox pictureBox1;
    }
}