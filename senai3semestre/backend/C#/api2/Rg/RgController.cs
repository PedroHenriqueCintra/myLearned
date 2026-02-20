using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using api2.Data;

namespace api2.Rg
{
    [Route("api/[controller]")]
    [ApiController]
    public class RgController : ControllerBase
    {
        private readonly api2Context _context;

        public RgController(api2Context context)
        {
            _context = context;
        }

        // GET: api/Rg
        [HttpGet]
        public async Task<ActionResult<IEnumerable<RgModell>>> GetRgModell()
        {
            return await _context.Rgs.ToListAsync();
        }

        // GET: api/Rg/5
        [HttpGet("{id}")]
        public async Task<ActionResult<RgModell>> GetRgModell(Guid id)
        {
            var rgModell = await _context.Rgs.FindAsync(id);

            if (rgModell == null)
            {
                return NotFound();
            }

            return rgModell;
        }

        // PUT: api/Rg/5
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPut("{id}")]
        public async Task<IActionResult> PutRgModell(Guid id, RgModell rgModell)
        {
            if (id != rgModell.Id)
            {
                return BadRequest();
            }

            _context.Entry(rgModell).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!RgModellExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/Rg
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPost]
        public async Task<ActionResult<RgModell>> PostRgModell(RgModell rgModell)
        {
            _context.Rgs.Add(rgModell);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetRgModell", new { id = rgModell.Id }, rgModell);
        }

        // DELETE: api/Rg/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> DeleteRgModell(Guid id)
        {
            var rgModell = await _context.Rgs.FindAsync(id);
            if (rgModell == null)
            {
                return NotFound();
            }

            _context.Rgs.Remove(rgModell);
            await _context.SaveChangesAsync();

            return NoContent();
        }

        private bool RgModellExists(Guid id)
        {
            return _context.Rgs.Any(e => e.Id == id);
        }
    }
}
