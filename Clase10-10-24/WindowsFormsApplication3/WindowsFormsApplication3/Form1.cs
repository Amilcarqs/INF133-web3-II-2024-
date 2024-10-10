using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication3
{
    public partial class Form1 : Form
    {
        int n;
        public Form1()
        {
            InitializeComponent();
        }
        private void buttonResumido(object sender, EventArgs e)
        {
            n = n * 10 + Convert.ToInt32( ((Button)sender).Text);
            textBox1.Text = n.ToString();
        }

        /*
        private void button1_Click(object sender, EventArgs e)
        {
            n = n * 10 + Convert.ToInt32(button1.Text);
            textBox1.Text = n.ToString();

        }

        private void button2_Click(object sender, EventArgs e)
        {
            n = n * 10 + Convert.ToInt32(button2.Text);
            textBox1.Text = n.ToString();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            n = n * 10 + Convert.ToInt32(button3.Text);
            textBox1.Text = n.ToString();
        }
          */

        private void Form1_Load(object sender, EventArgs e)
        {
            n = 0;
            textBox1.Text = n.ToString();
        }
    }
}
